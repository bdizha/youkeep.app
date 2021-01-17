<template>
  <r-modal :mask-closable="maskClosable"
           :closable="closable"
           :current="current"
           style="position: relative;">
    <a-row type="flex" justify="center">
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <h2 class="r-heading r-text-secondary">
          Edit account details
        </h2>
        <p class="r-text-normal">
          Changing your email address will also change your logging credentials.
        </p>
      </a-col>
    </a-row>
    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
            class="ant-form ant-form-vertical"
            @submit="onSave"
            :form="formRequest">
      <a-form-item label="Your full name">
        <a-input
          size="default"
          placeholder="Your full name"
          v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"/>
      </a-form-item>
      <a-form-item label="Email address">
        <a-input
          size="default"
          placeholder="Your email address"
          v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"/>
      </a-form-item>
      <a-row :gutter="24" type="flex" justify="center">
        <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <a-form-item label="Mobile number">
            <a-input
              size="default"
              placeholder="Your mobile number"
              v-decorator="['phone_number', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
              <a-icon slot="prefix" type="mobile"/>
            </a-input>
          </a-form-item>
        </a-col>
        <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <a-form-item label="Your birth date">
            <a-date-picker
              size="default"
              :format="dateFormat"
              placeholder="Your birth date"
              v-decorator="['birth_date', { rules: [{ required: true, message: 'Please enter your birth date' }] }]"/>
          </a-form-item>
        </a-col>
      </a-row>
      <a-form-item class="r-mt-48">
        <a-row :gutter="24" type="flex" justify="center">
          <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button block @click="onCancel" :size="'default'" class="r-btn-bordered-primary">
              Cancel
            </a-button>
          </a-col>
          <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button block @click="onSave" :size="'default'" type="secondary" html-type="submit"
                      class="r-btn-secondary">
              Save
            </a-button>
          </a-col>
        </a-row>
      </a-form-item>
    </a-form>
    <r-notice v-if="isSuccessful" :message="message"></r-notice>
    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
  </r-modal>
</template>
<script>
  import moment from 'moment';

  export default {
    name: 'r-account-modal-details',
    props: {
      maskClosable: {type: Boolean, required: false, default: false},
      closable: {type: Boolean, required: false, default: false},
    },
    data() {
      return {
        redirectTo: '/account/profile',
        user: {},
        fields: ['name', 'email', 'phone_number', 'birth_date'],
        formRequest: null,
        isSuccessful: false,
        isProcessing: false,
        current: 'account-details',
        dateFormat: 'YYYY-MM-DD',
        modal: {
          isVisible: false,
          current: null
        },
        hasError: false,
        errors: [],
        message: 'Your account details have been successfully updated.'
      };
    },
    mounted() {
      this.user = this.$store.state.user;

      this.formRequest = this.$form.createForm(this, {
        name: 'form_account_details',
        mapPropsToFields: () => {
          return {
            name: this.$form.createFormField({
              value: this.user.name,
            }),
            email: this.$form.createFormField({
              value: this.user.email,
            }),
            phone_number: this.$form.createFormField({
              value: this.user.phone_number,
            }),
            birth_date: this.$form.createFormField({
              value: moment(this.user.birth_date, this.dateFormat),
            }),
          };
        },
      });
    },
    methods: {
      onCancel() {
        this.modal.isVisible = false;
        this.modal.current = null;
        this.$store.dispatch('app/onModal', modal);
      },
      onSave(event) {
        event.preventDefault();

        this.hasError = false;
        this.isProcessing = true;

        this.formRequest.validateFields((error, values) => {
          if (!error) {
            console.log('Making request...', values);

            let params = Object.assign({}, values);
            let $this = this;

            let path = '/account/settings/store';
            HTTP.post(path, params)
              .then(response => {
                if (response.status = 422 && response.data.errors != undefined) {
                  let errors = response.data.errors;
                  $this.onError(errors);
                  setTimeout(function () {
                    $this.isProcessing = false;
                    $this.isSuccessful = false;
                  }, 3000);
                } else {
                  $this.isSuccessful = true;
                  setTimeout(function () {
                    $this.isProcessing = false;
                    $this.isSuccessful = false;
                    $this.user = response.data.user;

                    $this.onCancel();
                    $this.onUser();
                  }, 3000);
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
      onError(error) {
        let errors = [];
        let $this = this;
        this.fields.forEach(function (field) {

          if (error[field] != undefined) {
            let value = $this.formDetails.getFieldValue(field);
            let fields = {};
            fields[field] = {
              'value': value,
              "errors": [
                {
                  "message": error[field][0],
                  "field": field
                }
              ]
            };
            $this.formDetails.setFields(fields);
            console.log('what is this :: ' + field, error[field][0]);
          }
        });
      },
      onUser() {
        this.$store.commit('onUser', this.user);
        this.$router.push(this.redirectTo);
      }
    },
  };
</script>
