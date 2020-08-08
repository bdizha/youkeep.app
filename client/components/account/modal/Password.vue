<template>
  <r-modal :mask-closable="maskClosable"
           :closable="closable"
           :current="current"
           style="position: relative;">
    <a-row type="flex" justify="center">
      <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
        <h2 class="r-heading">
          Edit password
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
      <a-form-item label="Current password">
        <a-input type="password"
                 size="large"
                 placeholder="Current password"
                 v-decorator="['current_password', { rules: [{ required: true, message: 'Please enter new password' }] }]">
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item label="New password">
        <a-input type="password"
                 size="large"
                 placeholder="New password"
                 v-decorator="['password', { rules: [{ required: true, message: 'Please enter new password' }] }]">
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item label="Confirm new password">
        <a-input type="password"
                 size="large"
                 placeholder="Confirm new password"
                 v-decorator="['password_confirmation', { rules: [{ required: true, message: 'Please confirm new password' }] }]">
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item class="r-margin-top-48">
        <a-row :gutter="24" type="flex" justify="center">
          <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button block @click="onCancel" :size="'large'" class="r-btn-bordered-red">
              Cancel
            </a-button>
          </a-col>
          <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button block @click="onSave" :size="'large'" type="primary" html-type="submit"
                      class="ant-btn-secondary r-btn-red">
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
  export default {
    name: 'r-account-modal-password',
    props: {
      maskClosable: {type: Boolean, required: false, default: false},
      closable: {type: Boolean, required: false, default: false},
    },
    data() {
      return {
        formRequest: this.$form.createForm(this, {name: 'form_account_password'}),
        isSuccessful: false,
        isProcessing: false,
        current: 'account-password',
        modal: {
          isVisible: false,
          current: null
        },
        hasError: false,
        errors: []
      };
    },
    mounted() {
    },
    methods: {
      onSave(event) {
        event.preventDefault();

        this.hasError = false;

        this.formRequest.validateFields((err, values) => {
          if (!err) {
            console.log('Making request...', values);

            let params = Object.assign({}, values);
            let $this = this;

            let path = '/account/password';
            HTTP.post(path, params)
              .then(response => {
                console.log('Response');
                $this.isSuccessful = true;

                setTimeout(function () {
                  $this.isProcessing = false;
                }, 2400);
              })
              .catch(e => {
                $this.isProcessing = false;
                $this.hasError = true;
                console.log('Errors', e);
              });
          } else {
            this.hasError = true;
            console.error(err);
          }
        });
      },
      onCancel() {
        this.modal.isVisible = false;
        this.modal.current = null;
        this.$store.dispatch('app/onModal', modal);
      }
    },
  };
</script>
