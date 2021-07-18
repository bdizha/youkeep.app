<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <a-form v-if="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-row>
        <a-col :xs="{ span: 24 }">
          <a-form-item>
            <a-row :gutter=[24,24] justify="center" type="flex">
              <a-col :xs="{ span: 24 }" class="r-text-left">
                <h2 class="r-heading r-text-secondary">
                  Request a Shopple account
                </h2>
              </a-col>
              <a-col v-if="hasAddress" :xs="{ span: 24 }" class="r-text-left">
                <h3 class="r-heading">
                  <a-icon slot="prefix" type="environment"/>
                  Available in <span class="r-text-secondary">{{ address.city }}</span>!
                </h3>
              </a-col>
              <a-col :xs="{ span: 24 }">
                <p class="r-text-small">
                  This will just take a few steps to complete. Why don't you help us set up your
                  shopping account details in 3 just under minutes.
                </p>
              </a-col>
            </a-row>
          </a-form-item>
          <a-form-item label="Name">
            <a-input
              v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
              placeholder="Your full name"
              size="large"
            >
              <a-icon slot="prefix" type="user"/>
            </a-input>
          </a-form-item>
          <a-form-item label="Your mobile number">
            <a-input
              v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
              placeholder="Your mobile number"
              size="large"
            >
              <a-icon slot="prefix" type="mobile"/>
            </a-input>
          </a-form-item>
          <a-form-item label="Email address">
            <a-input v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
                     placeholder="Your email address"
                     size="large"
                     type="email"
            >
              <a-icon slot="prefix" type="mail"/>
            </a-input>
          </a-form-item>
          <a-form-item>
            <a-radio-group v-model="userType"
                           :default-value="1"
                           name="type" @change="onUserType"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-radio :value="1">
                    I'm a Business
                  </a-radio>
                </a-col>
                <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-radio :value="2">
                    I'm a Shopper
                  </a-radio>
                </a-col>
              </a-row>
            </a-radio-group>
          </a-form-item>
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class="r-btn-secondary" html-type="submit" size="large"
                      type="secondary"
            >
              Request an invite
            </a-button>
          </a-form-item>
          <a-form-item>
            <a-row align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 18 }" :sm="{ span: 24 }">
                <span class="r-inline-text">Already have an account?</span>
                <a class="r-inline-text" href=""
                   v-on:click="onModal('login', $event)"
                >
                  Login
                </a>
              </a-col>
            </a-row>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <r-notice :process="process"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-register',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      process: 'isSuccess',
      formName: 'register',
      fields: ['name', 'mobile', 'email'],
      form: this.$form.createForm(this, { name: 'form_register' }),
      message: 'Thank you for successfully signing up with Shopple. Enjoy your shopping!',
      userType: 1,
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
          let params = Object.assign({}, values)
          this.onRegister(params)
        }
      })
    },
    async onRegister (params) {
      params.type = this.userType
      params.password = '@%Chang3m3#'
      params.password_confirmation = params.password

      let payload = {
        params: params,
        route: '/register',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false,
      }
      let $this = this

      await this.$store.dispatch('auth/onPost', payload).catch(error => {
        try {
          let data = error.response.data
          if (data.errors !== undefined) {
            $this.setErrors(data.errors, $this)
          }
        } catch (e) {
        }
      }).then(response => {
        setTimeout(() => {
          if ($this.isValid) {
            $this.$message.success('Thank you for signing up with us, ' + $this.user.name + '. Enjoy your shopping with Shopple.')
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
    onUserType (e) {
      this.userType = e.target.value
    },
    setErrors (errors, $this) {
      $this.errors = errors
      $this.fields.forEach(function (field) {
        if ($this.errors[field] !== undefined) {
          let value = $this.form.getFieldValue(field)
          let fields = {}
          fields[field] = {
            'value': value,
            'errors': [
              {
                'message': $this.errors[field][0],
                'field': field
              }
            ]
          }
          $this.form.setFields(fields)
          console.log('what is this :: ' + field, $this.errors[field][0])
        }
      })
    }
  },
}
</script>
