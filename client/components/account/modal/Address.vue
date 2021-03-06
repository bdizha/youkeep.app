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
          {{ hasAddress ? 'Edit' : 'Add' }} an address
        </h3>
        <p class="r-text-normal">
          This address will be referenced as an option on your account.
        </p>
      </a-col>
    </a-row>
    <a-form v-show="hasForm"
            :form="form"
            class="ant-form ant-form-vertical"
            @submit="onPost"
    >
      <a-form-item label="Address Line 1">
        <a-input
          v-decorator="['address_line', { rules: [{ required: true, message: 'Please enter your Address line 1' }] }]"
          size="large"
        />
      </a-form-item>
      <a-form-item label="Address line 1 (optional)">
        <a-input
          v-decorator="['address_line_2', { rules: [] }]"
          size="large"
        />
      </a-form-item>
      <a-form-item label="Suburb">
        <a-input
          v-decorator="['suburb', { rules: [{ required: true, message: 'Please enter your suburb' }] }]"
          size="large"
        />
      </a-form-item>
      <a-row :gutter="24" align="middle" class="r-mt-24" justify="start" type="flex">
        <a-col :lg="{ span: 16 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-form-item label="City">
            <a-input
              v-decorator="['city', { rules: [{ required: true, message: 'Please enter your city' }] }]"
              size="large"
            />
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-form-item label="Postal Code">
            <a-input
              v-decorator="['postal_code', { rules: [{ required: true, message: 'Please enter your postal code' }] }]"
              size="large"
            />
          </a-form-item>
        </a-col>
      </a-row>
      <a-row align="middle" class="r-mt-24" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
               :xs="{ span: 24 }"
               class="r-text-left"
        >
          <div class="r-text-normal r-same-height">
            Set as default
          </div>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
               :xs="{ span: 24 }"
               class="r-text-right"
        >
          <a-switch v-model="isDefault" :default-checked="isDefault" size="small"/>
        </a-col>
      </a-row>
      <a-row :gutter="24" class="r-mt-24" justify="end" type="flex">
        <a-col v-if="hasAddress" :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }"
               :xs="{ span: 24 }"
        >
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class="r-btn-bordered-primary"
                      html-type="button"
                      size="large"
                      type="secondary"
                      @click="onDelete"
            >
              Delete
            </a-button>
          </a-form-item>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
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
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block class=" r-btn-secondary"
                      html-type="submit"
                      size="large"
                      type="secondary"
                      @click="onPost"
            >
              Save
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-address',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      redirectTo: '/account/location',
      fields: ['address_line', 'address_line_2', 'suburb', 'city', 'postal_code'],
      isDefault: false,
      form: this.$form.createForm(this, { name: 'form_address' }),
      formName: 'account-address',
      message: 'Your address has been successfully saved.'
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    current: 'address/current',
    processes: 'base/processes',
    address: 'address/address',
    hasAddress: 'address/hasAddress',
    hasForm: 'base/hasForm',
    isValid: 'form/isValid',
  }),
  created () {
    this.onForm()
  },
  mounted () {
  },
  methods: {
    async onForm () {
      let $this = this

      let payload = {
        form: this.$form,
        fields: this.fields
      }

      await this.$store.dispatch('address/onForm', payload).then((mapFields) => {
        console.log('what came back', mapFields)

        $this.form = $this.$form.createForm($this, {
          name: 'form_address',
          mapPropsToFields: () => {
            return mapFields
          },
        })
      })
    },
    onPost (event) {
      event.preventDefault()

      this.message = 'Your address has been successfully saved.'

      this.form.validateFields((error, values) => {
        if (!error) {

          let params = Object.assign({}, values)

          if (this.address != null) {
            params['id'] = this.address.id
            params['is_default'] = this.isDefault
          }

          let payload = {
            params: params,
            current: this.formName,
            message: this.message,
            route: '/account/address/store',
            hasUser: false,
            canRedirect: false,
          }

          this.$store.dispatch('address/onPost', payload)
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
      this.message = 'Your address has been successfully deleted.'

      let params = {
        address_id: this.address.id
      }

      let payload = {
        params: params,
        route: '/account/address/delete',
        current: this.formName,
        message: this.message,
        hasUser: true,
      }

      this.$store.dispatch('address/onPost', payload)
    }
  }
}
</script>
