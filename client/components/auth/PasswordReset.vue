<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <a-row justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h2 class="r-heading r-text-secondary">
          Set a new password
        </h2>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <div class="r-text-small">
          Sign in to your account with your email address.
        </div>
      </a-col>
    </a-row>
    <a-form v-if="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item label="Email Address">
        <a-input
          v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please enter your email address' }] }]"
          placeholder="Your email address"
        >
          <a-icon slot="prefix" type="user"/>
        </a-input>
      </a-form-item>
      <a-form-item label="New password">
        <a-input v-decorator="['password', { rules: [{ required: true, message: 'Please enter new password' }] }]"
                 placeholder="New password"
                 size="large"
                 type="password"
        >
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item label="Confirm new password">
        <a-input
          v-decorator="['password_confirmation', { rules: [{ required: true, message: 'Please confirm new password' }] }]"
          placeholder="Confirm new password"
          type="password"
        >
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item :wrapper-col="{ span: 24 }">
        <a-button block class="r-btn-secondary" html-type="submit" size="large" type="secondary"
                  @click="onPost"
        >
          Reset password
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
  name: 'r-password-reset',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
    token: { type: String, required: false, default: null },
  },
  data () {
    return {
      process: 'isSuccess',
      formName: 'password-request',
      message: 'Your password has been reset successfully.',
      form: this.$form.createForm(this, { name: 'form_reset' }),
      redirectTo: '/',
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    current: 'auth/current',
    processes: 'base/processes',
    isValid: 'form/isValid',
    hasForm: 'base/hasForm',
  }),
  created () {
  },
  methods: {
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values)
          this.onReset(params)
        }
      })
    },
    async onReset (params) {
      let $this = this
      let payload = {
        params: params,
        route: '/password/reset',
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
            $this.$message.success('Thank you. Enjoy your shopping with Spazamall.')
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
  }
}
</script>
