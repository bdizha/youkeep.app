<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="formName"
                    style="position: relative;">
    <r-notice  process="isSuccess"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    <a-row v-show="hasForm" type="flex" justify="center">
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <h3 class="r-heading">
          {{ hasAddress ? 'Edit' : 'Add' }} an address
        </h3>
        <p class="r-text-normal">
          This address will be referenced as an option on your account.
        </p>
      </a-col>
    </a-row>
    <a-form v-show="hasForm"
            class="ant-form ant-form-vertical"
            @submit="onPost"
            :form="form">
      <a-form-item label="Address Line 1">
        <a-input
           size="default"
            v-decorator="['address_line', { rules: [{ required: true, message: 'Please enter your Address line 1' }] }]"/>
      </a-form-item>
      <a-form-item label="Address line 1 (optional)">
        <a-input
           size="default"
            v-decorator="['address_line_2', { rules: [] }]"/>
      </a-form-item>
      <a-form-item label="Suburb">
        <a-input
           size="default"
            v-decorator="['suburb', { rules: [{ required: true, message: 'Please enter your suburb' }] }]"/>
      </a-form-item>
      <a-row class="r-mt-24" :gutter="24" type="flex" justify="start">
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 16 }">
          <a-form-item label="City">
            <a-input
               size="default"
                v-decorator="['city', { rules: [{ required: true, message: 'Please enter your city' }] }]"/>
          </a-form-item>
        </a-col>
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 8 }">
          <a-form-item label="Postal Code">
            <a-input
               size="default"
                v-decorator="['postal_code', { rules: [{ required: true, message: 'Please enter your postal code' }] }]"/>
          </a-form-item>
        </a-col>
      </a-row>
      <a-row class="r-mt-24" type="flex" justify="center" align="middle">
        <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <div class="r-text-normal r-same-height">
            Set as default
          </div>
        </a-col>
        <a-col class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <a-switch v-model="isDefault" size="small" :default-checked="isDefault"/>
        </a-col>
      </a-row>
      <a-row class="r-mt-24" :gutter="24" type="flex" justify="end">
        <a-col v-if="hasAddress" :xs="{ span: 24 }" :sm="{ span: 8 }" :md="{ span: 8 }"
               :lg="{ span: 8 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onDelete"
                     size="default"
                      type="secondary"
                      html-type="button"
                      class="r-btn-bordered-primary">
              Delete
            </a-button>
          </a-form-item>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 8 }" :md="{ span: 8 }" :lg="{ span: 8 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onReturn"
                     size="default"
                      type="secondary"
                      html-type="button"
                      class="r-btn-bordered-grey">
              Back
            </a-button>
          </a-form-item>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 8 }" :md="{ span: 8 }" :lg="{ span: 8 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onPost"
                     size="default"
                      type="secondary"
                      html-type="submit"
                      class=" r-btn-secondary">
              Save
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
  </r-modal-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-account-address',
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      redirectTo: '/account/location',
      fields: ['address_line', 'address_line_2', 'suburb', 'city', 'postal_code'],
      isDefault: false,
      form: this.$form.createForm(this, {name: 'form_address'}),
      formName: 'account-address',
      message: 'Your address has been successfully saved.'
    };
  },
  computed: mapGetters({
    modal: 'base/modal',
    current: 'address/current',
    processes: 'base/processes',
    address: 'address/address',
    hasAddress: 'address/hasAddress',
    hasForm: 'base/hasForm',
    isValid: "form/isValid",
  }),
  created() {
    this.onForm();
  },
  mounted() {
  },
  methods: {
    async onForm() {
      let $this = this;

      let payload = {
        form: this.$form,
        fields: this.fields
      };

      await this.$store.dispatch('address/onForm', payload).then((mapFields) => {
        console.log('what came back', mapFields);

        $this.form = $this.$form.createForm($this, {
          name: 'form_address',
          mapPropsToFields: () => {
            return mapFields;
          },
        });
      });
    },
    onPost(event) {
      event.preventDefault();

      this.message = 'Your address has been successfully saved.';

      this.form.validateFields((error, values) => {
        if (!error) {

          let params = Object.assign({}, values);

          if (this.address != null) {
            params['id'] = this.address.id;
            params['is_default'] = this.isDefault;
          }

          let payload = {
            params: params,
            current: this.formName,
            message: this.message,
            route: '/account/address/store',
            hasUser: false,
            canRedirect: false,
          };

          this.$store.dispatch('address/onPost', payload);
        }
      });
    },
    onReturn() {
      let modal = {};
      modal.isVisible = false;
      modal.current = null;

      this.$store.dispatch('base/onModal', modal);
    },
    onDelete() {
      this.message = 'Your address has been successfully deleted.';

      let params = {
        address_id: this.address.id
      };

      let payload = {
        params: params,
        route: '/account/address/delete',
        current: this.formName,
        message: this.message,
        hasUser: true,
      };

      this.$store.dispatch('address/onPost', payload);
    }
  }
};
</script>
