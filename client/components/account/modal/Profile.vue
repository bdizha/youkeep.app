<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-notice process="isSuccess"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
    <a-row v-show="hasForm" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading">
          Edit your account settings
        </h3>
        <p class="r-text-normal">
          Changing your email address will also change your logging credentials.
        </p>
      </a-col>
    </a-row>
    <a-form v-show="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item label="Your full name">
        <a-input
          v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
          placeholder="Your full name"
          size="large"
        />
      </a-form-item>
      <a-form-item label="Email address">
        <a-input
          v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
          placeholder="Your email address"
          size="large"
        />
      </a-form-item>
      <a-row :gutter="24" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
               class="r-text-left"
        >
          <a-form-item label="Mobile number">
            <a-input
              v-decorator="['phone_number', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
              placeholder="Your mobile number"
              size="large"
            >
              <a-icon slot="prefix" type="mobile"/>
            </a-input>
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
               class="r-text-left"
        >
          <a-form-item label="Your birth date">
            <a-date-picker
              v-decorator="['birth_date', { rules: [{ required: true, message: 'Please enter your birth date' }] }]"
              :format="dateFormat"
              placeholder="Your birth date"
              size="large"
            />
          </a-form-item>
        </a-col>
      </a-row>
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
import moment from 'moment'
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-profile',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      formName: 'account-profile',
      redirectTo: '/account/profile',
      fields: ['name', 'email', 'phone_number', 'birth_date'],
      form: this.$form.createForm(this, { name: 'form_account_profile' }),
      dateFormat: 'YYYY-MM-DD',
      message: 'Your account details have been successfully updated.'
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
    this.onForm()
  },
  methods: {
    async onForm () {
      let $this = this

      let payload = {
        form: this.$form,
        fields: this.fields
      }

      await this.$store.dispatch('auth/onForm', payload).then((mapFields) => {
        console.log('what came back', mapFields)
        $this.onInit($this, mapFields)
      })
    },
    onInit ($this, mapFields) {

      console.log('onInit onInit back', mapFields)

      if ($this.user.birth_date !== null) {
        mapFields.birth_date = $this.$form.createFormField({
          value: moment($this.user.birth_date, $this.dateFormat),
        })
      }

      $this.form = $this.$form.createForm($this, {
        name: 'form_account_profile',
        mapPropsToFields: () => {
          return mapFields
        },
      })
    },
    onReturn () {
      const modal = {}
      modal.isVisible = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    },
    onPost (event) {
      event.preventDefault()

      this.hasError = false
      this.isProcessing = true

      this.form.validateFields((error, values) => {
        if (!error) {
          console.log('Making request...', values)
          let params = Object.assign({}, values)
          this.onProfile(params)

        }
      })
    },
    async onProfile (params) {
      let $this = this
      let payload = {
        params: params,
        route: '/account/settings/store',
        current: this.formName,
        message: this.message,
        hasUser: true,
        canRedirect: false,
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
  }
}
</script>
