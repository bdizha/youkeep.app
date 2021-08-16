<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <a-row :gutter="[24,24]" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h2 class="r-heading r-text-secondary">
          Request password
        </h2>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <p class="r-text-small">
          Enter the email address associated with your Graphigem Account and we will send you
          instructions to reset your password.
        </p>
      </a-col>
    </a-row>
    <a-form v-if="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item label="Email address">
        <a-input
          v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
          placeholder="Your Email Address"
          size="large"
        />
      </a-form-item>
      <a-form-item :wrapper-col="{ span: 24 }">
        <a-button block class="r-btn-secondary" html-type="submit" size="large" type="secondary"
                  @click="onPost"
        >
          Send password
        </a-button>
      </a-form-item>
    </a-form>
    <r-notice :process="process"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-password-request',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      process: 'isSuccess',
      formName: 'password-request',
      form: this.$form.createForm(this, { name: 'form_password_request' }),
      message: 'We have sent you an email with instructions on how to reset your password.'
    }
  },
  computed: mapGetters({
    current: 'auth/current',
    processes: 'base/processes',
    isValid: 'form/isValid',
    hasForm: 'base/hasForm'
  }),
  created () {
  },
  methods: {
    isRunning () {
      return this.processes[this.process] !== undefined &&
        this.processes[this.process]
    },
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values)
          this.onRequest(params)
        }
      })
    },
    async onRequest (params) {
      let $this = this
      let payload = {
        params: params,
        route: '/password/email',
        current: this.formName,
        message: this.message,
        hasUser: true,
      }

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
            $this.$message.success('Thank you. Enjoy your business with Graphigem.')
          } else {
            $this.$message.error('Oops, the submitted form was invalid.')
          }
        }, 600)
      })
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
        }
      })
    }
  },
}
</script>
