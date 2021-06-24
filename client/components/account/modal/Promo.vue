<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="formName"
                    style="position: relative;"
  >
    <a-form v-show="hasForm"
            class="ant-form ant-form-vertical"
            @submit="onPost"
            :form="formPromo"
    >
      <a-form-item>
        <a-row type="flex" justify="center">
          <a-col class="r-text-left" :xs="{ span: 24 }">
            <h3 class="r-heading">
              Add a promo code
            </h3>
            <p class="r-text-normal">
              You can add as many promo codes into your Paise account.
            </p>
          </a-col>
        </a-row>
      </a-form-item>
      <a-form-item label="Your promo code">
        <a-input type="text"
                 size="large"
                 placeholder="Promo code"
                 v-decorator="['promo_code', { rules: [{ required: true, message: 'Please enter promo code' }] }]"
        >
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-row class="r-mt-24" :gutter="12" type="flex" justify="end">
        <a-col :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onReturn"
                      size="large"
                      type="secondary"
                      html-type="button"
                      class="r-btn-bordered-grey"
            >
              Back
            </a-button>
          </a-form-item>
        </a-col>
        <a-col :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onPost"
                      size="large"
                      type="secondary"
                      html-type="submit"
                      class="r-btn-secondary"
            >
              Redeem
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <r-notice process="isSuccess"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-promo',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      formName: 'account-promo',
      formPromo: this.$form.createForm(this, { name: 'form_account_promo' }),
      message: 'Your account promo have been successfully updated.',
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    user: 'auth/user',
    processes: 'base/processes',
    hasForm: 'base/hasForm',
    isValid: 'form/isValid',
  }),
  methods: {
    onPost (event) {
      event.preventDefault()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values)
          let payload = {
            params: params,
            route: '/account/promo',
            current: this.formName,
            message: this.message,
            hasUser: true,
          }

          this.$store.dispatch('auth/onPost', payload)
        }
      })
    },
    onReturn () {
      let modal = {}
      modal.isVisible = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
