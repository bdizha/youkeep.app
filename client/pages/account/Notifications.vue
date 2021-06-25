<template>
  <r-account>
    <r-notice process="isSuccess"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    <a-form v-show="hasForm" class="ant-form ant-form-vertical"
            @submit="onPost"
            :form="form"
    >
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
          <a-card class="r-mb-24" title="MOBILE NUMBER" style="width: 100%;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 20 }"
                     :sm="{ span: 20 }" :lg="{ span: 20 }"
              >
                <label class="r-heading-light">
                  We use your number to text or call you about your order.
                </label>
              </a-col>
              <a-col :xs="{ span: 4 }"
                     :sm="{ span: 4 }" :lg="{ span: 4 }"
              >
                <a-button v-on:click="onModal('account-profile')" block size="small"
                          type="secondary" class="r-btn-bordered-secondary"
                >
                  Change
                </a-button>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
          <a-card class="r-mb-24" title="ORDER NOTIFICATIONS" style="width: 100%;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <p class="r-text-normal">
                  Send an SMS message
                </p>
              </a-col>
              <a-col class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <a-switch v-model="canSendSms" size="large" default-checked/>
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <p class="r-text-normal">
                  Send app message
                </p>
              </a-col>
              <a-col class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <a-switch v-model="canSendApp" size="large" default-checked/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
          <a-card class="r-mb-24" title="EMAIL NOTIFICATIONS" style="width: 100%;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <p class="r-text-normal">
                  Send subscriptions/promotional emails
                </p>
              </a-col>
              <a-col class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <a-switch v-model="canSendEmail" size="large" default-checked/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row type="flex" justify="end">
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 8 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-button block @click="onPost"
                    size="large"
                    type="secondary"
                    html-type="submit"
                    class="r-btn-secondary"
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
    closable: { type: Boolean, required: false, default: true },
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
    hasForm: 'base/hasForm',
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
          let params = {
            can_send_sms: this.canSendSms,
            can_send_app: this.canSendApp,
            can_send_email: this.canSendEmail,
          }

          let payload = {
            params: params,
            route: '/account/settings/store',
            current: this.formName,
            message: this.message,
            hasUser: true,
            canRedirect: false,
          }

          this.$store.dispatch('form/onPost', payload)
        }
      })
    },
    onModal (current) {
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current
      this.$store.dispatch('base/onModal', modal)
    },
  },
}
</script>
