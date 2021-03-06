<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-notice :process="'isSubmit'"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
    <a-row v-show="hasForm" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading">
          Edit password
        </h3>
        <p class="r-text-normal">
          Changing your email address will also change your logging credentials.
        </p>
      </a-col>
    </a-row>
    <a-form v-show="hasForm" :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item label="Current password">
        <a-input
          v-decorator="['current_password', { rules: [{ required: true, message: 'Please enter new password' }] }]"
          placeholder="Current password"
          size="large"
          type="password"
        >
          <a-icon slot="prefix" type="lock"/>
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
          size="large"
          type="password"
        >
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item class="r-mt-48">
        <a-row :gutter="24" justify="center" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="r-text-left"
          >
            <a-button block class="r-btn-bordered-grey" size="large" @click="onReturn">
              Back
            </a-button>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="r-text-left"
          >
            <a-button block class="r-btn-secondary" html-type="submit" size="large" type="secondary"
                      @click="onPost"
            >
              Save
            </a-button>
          </a-col>
        </a-row>
      </a-form-item>
    </a-form>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-password',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      formName: 'account-password',
      form: this.$form.createForm(this, { name: 'form_account_password' }),
      message: 'Your password has been successfully updated.'
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    user: 'auth/user',
    processes: 'base/processes',
    hasForm: 'base/hasForm',
    isValid: 'form/isValid',
  }),
  created () {
  },
  methods: {
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values)
          this.onPassword(params)
        }
      })
    },
    async onPassword (params) {
      let payload = {
        params: params,
        route: '/account/password',
        current: this.formName,
        message: this.message,
        hasUser: true,
        canRedirect: false,
      }

      this.$store.dispatch('auth/onPost', payload).catch(error => {
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
            $this.$message.success($this.message)
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
    },
    async onReturn () {
      const modal = {}
      modal.isVisible = false
      modal.current = null
      await this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
