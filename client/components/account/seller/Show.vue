<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :xs="{ span: 24 }">
      <h3 class="r-heading">
        One more thing. Please confirm your information below!
      </h3>
    </a-col>
    <a-col :xs="{ span: 24 }">
      <p class="r-text-light">
        Please confirm accuracy of your information below.
      </p>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="gutter-row"
    >
      <a-form v-if="hasForm"
              :form="form"
              class="ant-form ant-form-vertical"
              @submit="onPost"
      >
        <a-row>
          <a-col :xs="{ span: 24 }">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }" class="gutter-row"
              >
                <a-form-item label="Country of birth">
                  <a-input
                    v-decorator="['registration', { rules: [{ required: true, message: 'Please enter your company reg #' }] }]"
                    placeholder="Your company registration number"
                    size="large"
                  >
                    <a-icon slot="prefix" type="user"/>
                  </a-input>
                </a-form-item>
              </a-col>
              <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }" class="gutter-row"
              >
                <a-form-item label="Date of birth">
                  <a-input
                    v-decorator="['registration', { rules: [{ required: true, message: 'Please enter your company reg #' }] }]"
                    placeholder="Your company registration number"
                    size="large"
                  >
                    <a-icon slot="prefix" type="user"/>
                  </a-input>
                </a-form-item>
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="gutter-row"
          >
            <a-button block class="r-btn-secondary"
                      size="large"
                      type="secondary"
                      @click="onPrevStep"
            >
              Previous
            </a-button>
          </a-col>
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="gutter-row"
          >
            <a-button block class="r-btn-secondary" html-type="submit" size="large"
                      type="secondary"
            >
              Confirm
            </a-button>
          </a-col>
        </a-row>
      </a-form>
      <r-result v-if="hasResult"></r-result>
      <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-seller-show',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formName: 'consent',
      nextStep: null,
      prevStep: 3,
      fields: ['is_confirmed'],
      form: this.$form.createForm(this, { name: 'form_consent' }),
      message: null,
      userType: 1
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
    hasResult: 'form/hasResult'
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
          this.onForm(params)
        }
      })
    },
    async onForm (params) {
      params.type = this.userType

      const payload = {
        params,
        route: '/store',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false
      }

      const $this = this

      await this.$store.dispatch('account/onPost', payload).catch((error) => {
        const data = error.response.data
        if (data.errors !== undefined) {
          $this.setErrors(data.errors, $this)
        }
      }).then((response) => {
        setTimeout(() => {
          $this.onConfirmation()

          const message = {
            title: 'Thank you for signing up',
            content: `Thank you for signing up with us, ${$this.user.name}. We sent a verification email to<br>
                        ${$this.user.email}<br>
                        Click the link inside to get started!`
          }

          $this.$store.dispatch('form/onResult', message)
          $this.$message.success('Thank you for signing up with us, ' + $this.user.name + '. Enjoy your business with Youkeep.')
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
    onConfirmation () {
      // redirect to the store landing page
    },
    onPrevStep () {
      this.$store.dispatch('account/onCurrentStep', this.prevStep)
    },
    onUserType (e) {
      this.userType = e.target.value
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
    }
  }
}
</script>
