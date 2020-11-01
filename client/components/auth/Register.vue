<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="formName"
                    style="position: relative;">
    <a-form v-if="hasForm"
            class="ant-form ant-form-vertical"
            @submit="onPost"
            :form="form">
      <a-row>
        <a-col :xs="{ span: 24 }">
          <a-form-item>
            <a-row type="flex" justify="center">
              <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                <h2 class="r-heading r-text-secondary">
                  Request a Shopple account
                </h2>
                <h3 v-show="hasAddress" class="r-heading">
                  <a-icon slot="prefix" type="environment"/>
                  Available in <span class="r-text-secondary">{{ address.city }}</span>!
                </h3>
                <p class="r-text-sm">
                  This will just take a few steps to complete. First, please help us set up your
                  shopping account details.
                </p>
              </a-col>
            </a-row>
          </a-form-item>
          <a-form-item label="Name">
            <a-input
              size="large"
              placeholder="Your full name"
              v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]">
              <a-icon slot="prefix" type="user"/>
            </a-input>
          </a-form-item>
          <a-form-item label="Your mobile number">
            <a-input
              size="large"
              placeholder="Your mobile number"
              v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
              <a-icon slot="prefix" type="mobile"/>
            </a-input>
          </a-form-item>
          <a-form-item label="Email address">
            <a-input type="email"
                     size="large"
                     placeholder="Your email address"
                     v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]">
              <a-icon slot="prefix" type="mail"/>
            </a-input>
          </a-form-item>
          <a-form-item>
            <a-radio-group v-model="userType"
                           @change="onUserType"
                           name="type" :default-value="1">
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                  <a-radio :value="1">
                    I'm a business
                  </a-radio>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                  <a-radio :value="2">
                    I'm a shopper
                  </a-radio>
                </a-col>
              </a-row>
            </a-radio-group>
          </a-form-item>
          <a-form-item :wrapper-col="{ span: 24 }">
            <a-button block :size="'large'" type="secondary" html-type="submit"
                      class="r-btn-secondary">
              Request an invite
            </a-button>
          </a-form-item>
          <a-form-item>
            <a-row type="flex" justify="center" align="middle">
              <a-col :sm="{ span: 24 }" :lg="{ span: 18 }">
                <span class="r-inline-text">Already have an account?</span>
                <a class="r-inline-text" v-on:click="onModal('login', $event)"
                   href="">
                  Login
                </a>
              </a-col>
            </a-row>
          </a-form-item>
        </a-col>
      </a-row>
    </a-form>
    <r-notice :process="process"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
  </r-modal-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-register',
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      process: 'isSuccess',
      formName: 'register',
      fields: ['name', 'mobile', 'email'],
      form: this.$form.createForm(this, {name: 'form_register'}),
      message: "Thank you for successfully signing up with Shopple. Enjoy your shopping!",
      userType: 1,
    };
  },
  computed: mapGetters({
    user: "auth/user",
    current: "auth/current",
    hasAddress: "account/hasAddress",
    address: "account/address",
    processes: "base/processes",
    isValid: "form/isValid",
    hasForm: "base/hasForm",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onPost(event) {
      event.preventDefault();

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values);
          this.onRegister(params);
        }
      });
    },
    async onRegister(params) {
      params.type = this.userType;
      params.password = '@%Chang3m3#';
      params.password_confirmation = params.password;

      let payload = {
        params: params,
        route: '/register',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false,
      };
      let $this = this;

      await this.$store.dispatch('auth/onPost', payload).catch(error => {
        try {
          let data = error.response.data;
          if (data.errors !== undefined) {
            $this.setErrors(data.errors, $this);
          }
        } catch (e) {
        }
      }).then(response => {
        setTimeout(() => {
          if ($this.isValid) {
            $this.$message.success('Thank you for signing up with us, ' + $this.user.name + '. Enjoy your shopping with Shopple.');
          } else {
            $this.$message.error('Oops, the submitted form was invalid.');
          }
        }, 600);
      });
    },
    onModal(current, event) {
      event.preventDefault();

      let modal = {};
      modal.isVisible = true;
      modal.isClosable = false;
      modal.current = current;
      this.$store.dispatch('base/onModal', modal);
    },
    onUserType(e) {
      this.userType = e.target.value;
    },
    setErrors(errors, $this) {
      $this.errors = errors;
      $this.fields.forEach(function (field) {
        if ($this.errors[field] !== undefined) {
          let value = $this.form.getFieldValue(field);
          let fields = {};
          fields[field] = {
            'value': value,
            "errors": [
              {
                "message": $this.errors[field][0],
                "field": field
              }
            ]
          };
          $this.form.setFields(fields);
          console.log('what is this :: ' + field, $this.errors[field][0]);
        }
      });
    }
  },
};
</script>
