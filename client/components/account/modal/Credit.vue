<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <a-form v-show="hasForm"
            :form="formCredit"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item>
        <a-row :gutter=[24,24] justify="center" type="flex">
          <a-col :xs="{ span: 24 }" class="r-text-left">
            <h3 class="r-heading">
              Add credit to your account
            </h3>
            <p class="r-text-normal">
              Your credit balance is always communicated to you with each transaction.
            </p>
          </a-col>
        </a-row>
      </a-form-item>
      <a-row :gutter=[24,24] justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-form-item label="Amount">
            <a-input v-decorator="['amount', { rules: [{ required: true, message: 'Please enter amount' }] }]"
                     placeholder="Amount"
                     size="large"
                     type="text"
            >
              <a-icon slot="prefix" type="lock"/>
            </a-input>
          </a-form-item>
        </a-col>
      </a-row>
      <a-row :gutter="12" class="r-mt-24" justify="end" type="flex">
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 6 }" :xs="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class="r-btn-bordered-grey"
                      html-type="button"
                      size="large"
                      type="secondary"
                      @click="onReturn"
            >
              Back
            </a-button>
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 6 }" :xs="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class="r-btn-secondary"
                      html-type="submit"
                      size="large"
                      type="secondary"
                      @click="onPost"
            >
              Top up
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <r-notice process="isSuccess"></r-notice>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-credit',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      formName: 'account-credit',
      formCredit: this.$form.createForm(this, { name: 'form_account_credit' })
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
            route: '/account/credit',
            current: this.formName,
            message: this.message,
            hasUser: true,
          }

          this.$store.dispatch('auth/onPost', payload)
        }
      })
    },
    onReturn () {
      const modal = {}
      modal.isVisible = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
