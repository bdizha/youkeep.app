<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
  >
    <a-row :gutter="[24,24]" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h2 class="r-heading r-text-secondary">
          Sign In
        </h2>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <div class="r-text-small">
          Sign in to your account with your email address.
        </div>
      </a-col>
      <a-col :xs="{ span: 24 }">
        <a-form v-if="hasForm"
                :form="form"
                class="ant-form ant-form-vertical"
                @submit="onPost"
        >
          <a-form-item label="Email address">
            <a-input
              v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please enter your Email Address' }] }]"
              placeholder="Your Email Address"
              size="large"
            >
              <a-icon slot="prefix" type="mail" />
            </a-input>
          </a-form-item>
          <a-form-item label="Password">
            <a-input v-decorator="['password', { rules: [{ required: true, message: 'Please enter your Password' }] }]"
                     placeholder="Your Password"
                     size="large"
                     type="password"
            >
              <a-icon slot="prefix" type="lock" />
            </a-input>
          </a-form-item>
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class="r-btn-secondary" html-type="submit" size="large" type="secondary"
                      @click="onPost"
            >
              Login
            </a-button>
          </a-form-item>
          <a-form-item>
            <a-row justify="center" type="flex">
              <a-col :lg="{ span: 18 }" :sm="{ span: 24 }">
                <span class="r-inline-text">Don't have an Account?</span>
                <a class="r-inline-text r-text-secondary" href="/" @click="onModal('register', $event)">
                  Sign up
                </a><br>
                <span class="r-inline-text ">Forgot your Password?</span>
                <a class="r-inline-text r-text-secondary" href="/"
                   @click="onModal('password-request', $event)"
                >
                  Reset it
                </a>
              </a-col>
            </a-row>
          </a-form-item>
        </a-form>
      </a-col>
    </a-row>
    <r-notice :process="process" />
    <r-spinner :is-absolute="true" process="isRunning" />
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'RLogin',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formName: 'login',
      fields: ['email', 'password'],
      form: this.$form.createForm(this, { name: 'form_login' }),
      errors: [],
      process: 'isSuccess',
      redirectTo: '',
      message: 'Thank you for successfully confirming your credentials! Please wait a little more, and pay less with Spazamall'
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    user: 'auth/user',
    isLoggedIn: 'auth/isLoggedIn',
    current: 'auth/current',
    processes: 'base/processes',
    isValid: 'form/isValid',
    hasForm: 'base/hasForm'
  }),
  created () {
  },
  methods: {
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          const params = Object.assign({}, values)

          this.onLogin(params)
        }
      })
    },
    async onLogin (params) {
      const $this = this

      const payload = {
        params,
        route: '/login',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: true
      }

      await this.$store.dispatch('auth/onPost', payload).catch((error) => {
        try {
          const data = error.response.data
          if (data.errors !== undefined) {
            $this.setErrors(data.errors, $this)
          }
        } catch (e) {
        }
      }).then((response) => {
        setTimeout(() => {
          if ($this.isValid) {
            $this.$message.success('Welcome back, ' + $this.user.name + '. Enjoy your shopping with Spazamall.')
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
        }
      })
    }
  }
}
</script>
