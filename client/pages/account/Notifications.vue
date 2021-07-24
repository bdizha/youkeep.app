<template>
  <r-account>
    <r-notice process="isSuccess"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
    <a-form v-show="hasForm" :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="r-store-page"
        >
          <a-card class="r-mb-24" style="width: 100%;" title="MOBILE NUMBER">
            <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 20 }"
                     :sm="{ span: 20 }" :xs="{ span: 20 }"
              >
                <label class="r-heading-light">
                  We use your number to text or call you about your order.
                </label>
              </a-col>
              <a-col :lg="{ span: 4 }"
                     :sm="{ span: 4 }" :xs="{ span: 4 }"
              >
                <a-button block class="r-btn-bordered-secondary" size="small"
                          type="secondary" v-on:click="onModal('account-profile')"
                >
                  Change
                </a-button>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="r-store-page"
        >
          <a-card class="r-mb-24" style="width: 100%;" title="ORDER NOTIFICATIONS">
            <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <p class="r-text-normal">
                  Send an SMS message
                </p>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-right"
              >
                <a-switch v-model="canSendSms" default-checked size="large"/>
              </a-col>
            </a-row>
            <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <p class="r-text-normal">
                  Send app message
                </p>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-right"
              >
                <a-switch v-model="canSendApp" default-checked size="large"/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="r-store-page"
        >
          <a-card class="r-mb-24" style="width: 100%;" title="EMAIL NOTIFICATIONS">
            <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <p class="r-text-normal">
                  Send subscriptions/promotional emails
                </p>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
                     class="r-text-right"
              >
                <a-switch v-model="canSendEmail" default-checked size="large"/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row justify="end" type="flex">
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 8 }" :xs="{ span: 12 }" class="gutter-row">
          <a-button block class="r-btn-secondary"
                    html-type="submit"
                    size="large"
                    type="secondary"
                    @click="onPost"
          >
            Save
          </a-button>
        </a-col>
      </a-row>
    </a-form>
  </r-account>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    maskClosable: { type: Boolean, required: false, default: true },
    closable: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      formName: 'account-notifications',
      form: this.$form.createForm(this, { name: 'form_account_notifications' }),
      canSendSms: true,
      canSendApp: true,
      canSendEmail: true,
      message: 'Your notification settings have been successfully saved.'
    }
  },
  computed: mapGetters({
    user: 'auth/user',
    current: 'form/current',
    processes: 'base/processes',
    hasForm: 'base/hasForm'
  }),
  created () {
    this.canSendApp = Boolean(this.user.can_send_app)
    this.canSendSms = Boolean(this.user.can_send_sms)
    this.canSendEmail = Boolean(this.user.can_send_email)
  },
  methods: {
    onPost (event) {
      event.preventDefault()

      this.hasError = false
      this.isProcessing = true

      this.form.validateFields((error, values) => {
        if (!error) {
          const params = {
            can_send_sms: this.canSendSms,
            can_send_app: this.canSendApp,
            can_send_email: this.canSendEmail
          }

          const payload = {
            params,
            route: '/account/settings/store',
            current: this.formName,
            message: this.message,
            hasUser: true,
            canRedirect: false
          }

          this.$store.dispatch('form/onPost', payload)
        }
      })
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
