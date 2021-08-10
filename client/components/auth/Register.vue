<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
  >
    <a-form v-if="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col v-if="currentStep === 1" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col :xs="{ span: 24 }">
              <h3 class="r-heading r-text-secondary">
                You're almost there!
              </h3>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-form-item label="Tells us more about you?">
                <a-radio-group v-model="userType"
                               name="type"
                               @change="onUserType"
                >
                  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                    <a-col v-for="(userType, index) in userTypes"
                           :key="index"
                           :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <a-radio :value="userType.value">
                        <span>
                          I'm a {{ userType.label }}
                        </span>
                        <span class="r-text-help">
                          {{ userType.content }}
                        </span>
                      </a-radio>
                    </a-col>
                  </a-row>
                </a-radio-group>
              </a-form-item>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="currentStep === 0" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col :xs="{ span: 24 }">
              <h3 class="r-heading r-text-secondary">
                Let’s create your account.
              </h3>
            </a-col>
            <a-col v-if="hasAddress" :xs="{ span: 24 }">
              <h3 class="r-heading">
                <a-icon slot="prefix" type="environment" />
                Available in <span class="r-text-secondary">{{ address.city }}</span>!
              </h3>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <p class="r-text-light">
                This will just take a few steps to complete. Why don't you help us set up your
                spazamall account in just under 3 minutes.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="currentStep === 0" :xs="{ span: 24 }">
          <a-form-item label="Name">
            <a-input
              v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
              placeholder="Your full name"
              size="large"
            >
              <a-icon slot="prefix" type="user" />
            </a-input>
          </a-form-item>
          <a-form-item label="Email">
            <a-input v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email' }] }]"
                     placeholder="Your email"
                     size="large"
                     type="email"
            >
              <a-icon slot="prefix" type="mail" />
            </a-input>
          </a-form-item>
          <a-form-item label="Password">
            <a-input v-decorator="['password', { rules: [{ required: true, message: 'Please enter your password' }] }]"
                     placeholder="Your password"
                     size="large"
                     type="password"
            >
              <a-icon slot="prefix" type="lock" />
            </a-input>
          </a-form-item>
          <a-form-item class="r-mb-0 r-pb-0"
                       label="Captcha"
                       extra="We must make sure that your are a human."
          >
            <a-row :gutter="12">
              <a-col :span="12">
                <p class="r-text-medium r-p-12">
                  {{ firstOperand }} + {{ secondOperand }} = ?
                </p>
              </a-col>
              <a-col :span="12">
                <a-input v-decorator="[ 'captcha', { rules: [{ required: true, message: 'Please input the captcha you got!' }] }]"
                         size="large"
                         placeholder="Your answer"
                />
              </a-col>
            </a-row>
          </a-form-item>
        </a-col>
        <a-col v-if="currentStep === 0" class="r-text-center r-shadow-none" :xs="{ span: 24 }">
          <div class="r-divider-top r-text-small">
            <a-form-item v-bind="confirmTerms">
              <a-checkbox v-decorator="['agreement', { valuePropName: 'checked' }]">
                <span>By continuing, you agree to the</span>
                <nuxt-link to="/terms">
                  Terms
                </nuxt-link>
                <span>and</span>
                <nuxt-link to="/privacy">
                  Privacy Policy
                </nuxt-link>
                <span>.</span>
              </a-checkbox>
            </a-form-item>
          </div>
        </a-col>
        <a-col :xs="{ span: 24 }">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }">
              <a-button block
                        class="r-btn-secondary"
                        html-type="submit"
                        size="large"
                        type="secondary"
              >
                Continue
              </a-button>
            </a-col>
            <a-col v-if="currentStep === 0" :lg="{ span: 18 }" :sm="{ span: 24 }">
              <span class="r-inline-text">Already have an account?</span>
              <a class="r-inline-text" href=""
                 @click="onModal('login', $event)"
              >
                Login
              </a>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-form>
    <r-result v-if="hasResult" />
    <r-spinner :is-absolute="true" process="isRunning" />
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'RRegister',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formName: 'register',
      fields: ['name', 'email', 'password', 'password_confirmation', 'is_confirmed', 'captcha'],
      form: this.$form.createForm(this, { name: 'form_register' }),
      message: null,
      userType: 1,
      confirmTerms: false,
      firstOperand: 1,
      secondOperand: 1,
      userTypes: [
        {
          value: 1,
          label: 'shopper',
          content: 'I would like shop at Spazamall for everyday items. like fashion, gadgets and more.'
        },
        {
          value: 3,
          label: 'seller',
          content: 'I would like to sell products to millions of Spazamall shoppers out there.'
        },
        {
          value: 4,
          label: 'business',
          content: 'We would like to do B2B transactions or partner up with Spazamall.'
        }
      ],
      nextStep: 1,
      prevStep: null
    }
  },
  computed: mapGetters({
    user: 'auth/user',
    current: 'auth/current',
    hasAddress: 'account/hasAddress',
    address: 'account/address',
    processes: 'base/processes',
    isValid: 'form/isValid',
    hasForm: 'base/hasForm',
    result: 'form/result',
    hasResult: 'form/hasResult',
    currentStep: 'account/currentStep'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          const params = Object.assign({}, values)
          this.onRegister(params)
        }
      })
    },
    async onRegister (params) {
      params.type = this.userType
      params.password_confirmation = params.password

      const payload = {
        params,
        route: '/register',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false
      }

      const $this = this

      await this.$store.dispatch('auth/onPost', payload).catch((error) => {
        const data = error.response.data
        if (data.errors !== undefined) {
          $this.setErrors(data.errors, $this)
        }
      }).then((response) => {
        setTimeout(() => {
          if ($this.isValid) {
            $this.onNextStep()
          } else {
            $this.$message.error('Oops, the submitted form was invalid.')
          }
        }, 600)
      })
    },
    onModal (current, event) {
      event.preventDefault()

      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    },
    onUserType () {
      console.log(this.userType, 'userType')
    },
    setErrors (errors, $this) {
      $this.errors = errors
      $this.fields.forEach(function (field) {
        if ($this.errors[field] !== undefined) {
          const value = $this.form.getFieldValue(field)
          const fields = {}
          fields[field] = {
            value,
            'errors': [
              {
                'message': $this.errors[field][0],
                field
              }
            ]
          }
          $this.form.setFields(fields)
          console.log('what is this :: ' + field, $this.errors[field][0])
        }
      })
    },
    onSuccess () {
      const message = {
        title: 'Thank you for signing up',
        content: `Thank you for signing up with us, ${this.user.name}. We sent a verification email to<br>
                    ${this.user.email}<br>
                    Click the link inside to get started!`
      }

      this.$store.dispatch('form/onResult', message)
      this.$message.success('Thank you for signing up with us, ' + this.user.name + '. Enjoy your shopping with Spazamall.')
    },
    onNextStep () {
      if (this.currentStep === 1) {
        this.onSuccess()
        this.$router.push({ name: 'verify-email' })
      } else {
        this.$store.dispatch('account/onCurrentStep', this.nextStep)
      }
    },
    onPrevStep () {
      this.$store.dispatch('account/onCurrentStep', this.prevStep)
    }
  }
}
</script>
