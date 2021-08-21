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
          {{ hasCard ? 'Edit' : 'Add' }}
          payment card
        </h3>
        <p class="r-text-small">
          Your card details are always secured by a two-step authentication.
        </p>
      </a-col>
    </a-row>
    <a-form v-show="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-row :gutter="24" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-form-item label="Card number">
            <a-input v-decorator="['card_number', { rules: [{ required: true, message: 'Please enter card number' }] }]"
                     placeholder="1234 1234 1234 1234"
                     size="large"
                     type="text"
            >
              <a-icon slot="prefix" type="lock"/>
            </a-input>
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-form-item label="Expiration">
            <a-input v-decorator="['expire_at', { rules: [{ required: true, message: 'Please enter expiration' }] }]"
                     placeholder="MM / YY"
                     size="large"
                     type="text"
            >
              <a-icon slot="prefix" type="clock-circle"/>
            </a-input>
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-form-item label="CVC">
            <a-input v-decorator="['cvc', { rules: [{ required: true, message: 'Please enter CVC' }] }]"
                     placeholder="CVC"
                     size="large"
                     type="text"
            >
            </a-input>
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
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-card',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      fields: ['card_number', 'expire_at', 'csv'],
      form: this.$form.createForm(this, { name: 'form_account_card' }),
      formName: 'account-card',
      message: null
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    current: 'card/current',
    cards: 'account/cards',
    card: 'card/card',
    hasCard: 'card/hasCard',
    processes: 'base/processes',
    hasForm: 'base/hasForm',
    isValid: 'form/isValid'
  }),
  created () {
  },
  mounted () {
    this.$store.subscribe((mutation, state) => {
      if (mutation.type == 'card/setCard') {
        console.log('mutation >>>>', mutation)
        this.onForm()
      }
    })
  },
  methods: {
    async onForm () {
      let $this = this

      let payload = {
        form: this.$form,
        fields: this.fields
      }

      await this.$store.dispatch('card/onForm', payload).then((mapFields) => {
        console.log('what came back', mapFields)

        $this.form = $this.$form.createForm($this, {
          name: 'form_account_card',
          mapPropsToFields: () => {
            return mapFields
          },
        })
      })
    },
    onPost (event) {
      event.preventDefault()

      this.message = 'Your payment card has been successfully saved.'

      this.form.validateFields((error, values) => {
        if (!error) {
          console.log('Making request...', values)

          let params = Object.assign({}, values)
          if (this.card != null) {
            params['id'] = this.card.id
          }

          if (this.isDefault) {
            params['is_default'] = this.isDefault
          }

          let payload = {
            params: params,
            current: this.formName,
            message: this.message,
            route: '/account/card/store'
          }

          this.$store.dispatch('card/onPost', payload)
        }
      })
    },
    onReturn () {
      const modal = {}
      modal.isVisible = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    },
    onDelete () {
      this.message = 'Your card has been successfully deleted.'

      let params = {
        card_id: this.card.id
      }
      let payload = {
        params: params,
        route: '/account/card/delete',
        current: this.formName
      }

      this.$store.dispatch('card/onPost', payload)
    }
  },
}
</script>
