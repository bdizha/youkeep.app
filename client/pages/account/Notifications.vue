<template>
  <r-account>
    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
            class="ant-form ant-form-vertical"
            @submit="onSave"
            :form="formNotifications">
      <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <a-card title="MOBILE NUMBER" style="width: 100%; margin-bottom: 20px;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 20 }"
                     :sm="{ span: 20 }" :lg="{ span: 20 }">
                <label class="r-heading-light">
                  We use your number to text or call you about your order.
                </label>
              </a-col>
              <a-col :xs="{ span: 4 }"
                     :sm="{ span: 4 }" :lg="{ span: 4 }">
                <a-button v-on:click="onModal('account-details')" block size="small"
                          type="secondary" class="r-btn-bordered-black">
                  Change
                </a-button>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <a-card title="ORDER NOTIFICATIONS" style="width: 100%; margin-bottom: 20px;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <p class="r-text-normal">
                  Send an SMS message
                </p>
              </a-col>
              <a-col class="gutter-row r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <a-switch v-model="canSendSms" size="large" default-checked/>
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <p class="r-text-normal">
                  Send app message
                </p>
              </a-col>
              <a-col class="gutter-row r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <a-switch v-model="canSendApp" size="large" default-checked/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <a-card title="EMAIL NOTIFICATIONS" style="width: 100%; margin-bottom: 20px;">
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <p class="r-text-normal">
                  Send subscriptions/promotional emails
                </p>
              </a-col>
              <a-col class="gutter-row r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <a-switch v-model="canSendEmail" size="large" default-checked/>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
      <a-row class="r-margin-top-24" :gutter="24" type="flex" justify="end">
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">

        </a-col>
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block @click="onSave"
                      size="large"
                      type="primary"
                      html-type="submit"
                      class="r-btn-red">
              Save
            </a-button>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <div v-if="isSuccessful" class="r-status-update">
      <a-icon type="check-circle"/>&nbsp;
      {{ message }}
    </div>
    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
  </r-account>
</template>
<script>
  export default {
    name: 'r-account-notifications',
    props: {
      maskClosable: {type: Boolean, required: false, default: true},
      closable: {type: Boolean, required: false, default: true},
    },
    data() {
      return {
        formNotifications: this.$form.createForm(this, {name: 'form_account_notifications'}),
        isSuccessful: false,
        isProcessing: false,
        current: 'account-notifications',
        canSendSms: true,
        canSendApp: true,
        canSendEmail: true,
        modal: {
          isVisible: false,
          current: null
        },
        message: 'Your notification settings have been successfully saved.',
        user: null,
        hasError: false,
        errors: []
      };
    },
    mounted() {
      this.user = this.$store.state.user;
      this.canSendApp = Boolean(this.user.can_send_app);
      this.canSendSms = Boolean(this.user.can_send_sms);
      this.canSendEmail = Boolean(this.user.can_send_email);
    },
    methods: {
      onSave(event) {
        event.preventDefault();

        this.hasError = false;
        this.isProcessing = true;

        this.formNotifications.validateFields((error, values) => {
          if (!error) {
            let params = {
              can_send_sms: this.canSendSms,
              can_send_app: this.canSendApp,
              can_send_email: this.canSendEmail,
            };

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
      },
      onModal(current) {
        this.modal.isVisible = true;
        this.modal.current = current;
        this.$store.dispatch('app/onModal', modal);
      },
    },
  };
</script>
