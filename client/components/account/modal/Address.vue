<template>
  <r-modal :mask-closable="maskClosable"
           :closable="closable"
           :current="current"
           style="position: relative;">
    <a-row type="flex" justify="center">
      <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
        <h2 class="r-heading">
          {{ modal.address != null ? 'Edit' : 'Add' }}
          an address
        </h2>
        <p class="r-text-normal">
          This address will be referenced as an option on your account.
        </p>
      </a-col>
    </a-row>
    <a-form class="ant-form ant-form-vertical"
            @submit="onSave"
            :form="formAddress">
      <a-form-item label="Address Line 1">
        <a-input
          size="large"
          v-decorator="['address_line', { rules: [{ required: true, message: 'Please enter your Address line 1' }] }]"/>
      </a-form-item>
      <a-form-item label="Address line 1 (optional)">
        <a-input
          size="large"
          v-decorator="['address_line_2', { rules: [] }]"/>
      </a-form-item>
      <a-form-item label="Suburb">
        <a-input
          size="large"
          v-decorator="['suburb', { rules: [{ required: true, message: 'Please enter your suburb' }] }]"/>
      </a-form-item>
      <a-row class="r-margin-top-24" :gutter="24" type="flex" justify="start">
        <a-col :xs="{ span: 16 }" :sm="{ span: 18 }" :lg="{ span: 18 }">
          <a-form-item label="City">
            <a-input
              size="large"
              v-decorator="['city', { rules: [{ required: true, message: 'Please enter your city' }] }]"/>
          </a-form-item>
        </a-col>
        <a-col :xs="{ span: 8 }" :sm="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item label="Postal Code">
            <a-input
              size="large"
              v-decorator="['postal_code', { rules: [{ required: true, message: 'Please enter your postal code' }] }]"/>
          </a-form-item>
        </a-col>
      </a-row>
      <a-row class="r-margin-top-24" type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <div class="r-text-normal r-same-height">
            Set as default
          </div>
        </a-col>
        <a-col class="gutter-row r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <a-switch v-model="isDefault" size="large" :default-checked="isDefault"/>
        </a-col>
      </a-row>
      <a-row class="r-margin-top-24" :gutter="24" type="flex" justify="end">
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-row class="" :gutter="24" type="flex" justify="start">
            <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-form-item :wrapper-col="{ span: 24 }">
                <a-button block @click="onDelete"
                          size="default"
                          type="secondary"
                          html-type="button"
                          class="r-btn-bordered-black">
                  Delete
                </a-button>
              </a-form-item>
            </a-col>
          </a-row>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onCancel"
                      size="default"
                      type="secondary"
                      html-type="button"
                      class="r-btn-bordered-red">
              Cancel
            </a-button>
          </a-form-item>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onSave"
                      size="default"
                      type="primary"
                      html-type="submit"
                      class="ant-btn-secondary r-btn-red">
              Save
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <r-notice v-if="isSuccessful" :message="message"></r-notice>
    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
  </r-modal>
</template>
<script>
  import moment from "moment";

  export default {
    name: 'r-account-modal-address',
    props: {
      maskClosable: {type: Boolean, required: false, default: false},
      closable: {type: Boolean, required: false, default: false},
    },
    data() {
      return {
        redirectTo: '/account/location',
        fields: ['address_line', 'address_line_2', 'suburb', 'city', 'postal_code'],
        addresses: [],
        address: {},
        isDefault: false,
        formAddress: this.$form.createForm(this, {name: 'form_address'}),
        isSuccessful: false,
        isProcessing: false,
        current: 'account-address',
        modal: {
          isVisible: false,
          current: null,
          address: null,
        },
        hasError: false,
        errors: [],
        message: null
      };
    },
    computed: {},
    mounted() {
      this.address = this.$store.state.address;
      this.addresses = this.$store.state.addresses;

      let $this = this;
      $this.setForm();

      this.$store.subscribe((mutation, state) => {
        if (mutation.type == 'onModal') {
          $this.modal = mutation.payload;
          $this.address = $this.modal.address;
          $this.setForm();
        }
      });
    },
    methods: {
      setForm() {
        let mapFields = {};
        let $this = this;

        if (this.address != null) {
          this.isDefault = Boolean(this.address.is_default);
          this.fields.forEach(function (field) {
            mapFields[field] = $this.$form.createFormField({
              value: $this.address[field],
            });
          });

          this.formAddress = this.$form.createForm(this, {
            name: 'form_account_details',
            mapPropsToFields: () => {
              return mapFields;
            },
          });
        } else {
          this.isDefault = true;
          this.fields.forEach(function (field) {
            mapFields[field] = $this.$form.createFormField({
              value: null,
            });
          });

          this.formAddress = this.$form.createForm(this, {
            name: 'form_account_details',
            mapPropsToFields: () => {
              return mapFields;
            },
          });
        }
      },
      onSave(event) {
        event.preventDefault();

        this.hasError = false;

        this.formAddress.validateFields((error, values) => {
          this.isProcessing = true;

          if (!error) {
            console.log('Making request...', values);

            let params = Object.assign({}, values);
            let $this = this;

            if (this.address != null) {
              params['id'] = this.address.id;
            }

            if (this.isDefault) {
              params['is_default'] = this.isDefault;
            }
            this.message = 'Your address has been successfully saved.';

            let path = '/account/address/store';
            HTTP.post(path, params)
              .then(response => {
                if (response.status = 422 && response.data.errors != undefined) {
                  $this.onError(response);
                } else {
                  $this.onResponse(response);
                }
              })
              .catch(e => {
                $this.isProcessing = false;
                $this.hasError = true;
                console.log('Errors', e);
              });
          } else {
            this.hasError = true;
            console.error(error);
          }
        });
      },
      onResponse(response) {
        let $this = this;
        $this.isSuccessful = true;
        setTimeout(function () {
          $this.isProcessing = false;
          $this.isSuccessful = false;

          if (response.data.address != null) {
            $this.address = response.data.address;
          }

          $this.addresses = response.data.addresses;

          $this.onCancel();
          $this.onAddress();
          $this.onAddresses();
        }, 3000);
      },
      onError(response) {
        let errors = response.data.errors;
        let $this = this;

        this.fields.forEach(function (field) {
          if (errors[field] != undefined) {
            let value = $this.formDetails.getFieldValue(field);
            let fields = {};
            fields[field] = {
              'value': value,
              "errors": [
                {
                  "message": errors[field][0],
                  "field": field
                }
              ]
            };
            $this.formDetails.setFields(fields);
            console.log('what is this :: ' + field, errors[field][0]);
          }
        });

        setTimeout(function () {
          this.isProcessing = false;
          this.isSuccessful = false;
        }, 3000);
      },
      onAddress() {
        this.$store.commit('onAddress', this.address);
      },
      onAddresses() {
        this.$store.commit('onAddresses', this.addresses);
        this.$router.push(this.redirectTo);
      },
      onCancel() {
        this.modal.isVisible = false;
        this.modal.current = null;
        this.$store.dispatch('app/onModal', modal);
      },
      onDelete() {
        let $this = this;
        this.message = 'Your address has been successfully deleted.';

        let params = {
          address_id: this.address.id
        };

        let path = '/account/address/delete';
        HTTP.post(path, params)
          .then(response => {
            if (response.status = 422 && response.data.errors != undefined) {
              $this.onError(response, $this);
            } else {
              $this.onResponse(response, $this);
            }
          })
          .catch(e => {
            $this.isProcessing = false;
            $this.hasError = true;
            console.log('Errors', e);
          });
      }
    },
  };
</script>
