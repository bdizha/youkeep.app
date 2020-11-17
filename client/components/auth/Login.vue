<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="formName"
                    style="position: relative;">
    <a-form v-if="hasForm"
            class="ant-form ant-form-vertical"
            @submit="onPost"
            :form="form">
      <a-form-item>
        <a-row type="flex" justify="center">
          <a-col class="r-text-left" :xs="{ span: 24 }">
            <h2 class="r-heading r-text-secondary">
              Sign in
            </h2>
            <div class="r-text-sm">
              Sign in to your account with your email address.
            </div>
          </a-col>
        </a-row>
      </a-form-item>
      <a-form-item label="Email address">
        <a-input
            size="large"
            placeholder="Your email address"
            v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please enter your email address' }] }]">
          <a-icon slot="prefix" type="mail"/>
        </a-input>
      </a-form-item>
      <a-form-item label="Password">
        <a-input type="password"
                 size="large"
                 placeholder="Your Password"
                 v-decorator="['password', { rules: [{ required: true, message: 'Please enter your password' }] }]">
          <a-icon slot="prefix" type="lock"/>
        </a-input>
      </a-form-item>
      <a-form-item :wrapper-col="{ span: 24 }">
        <a-button block @click="onPost" :size="'large'" type="secondary" html-type="submit"
                  class="r-btn-secondary">
          Login
        </a-button>
      </a-form-item>
      <a-form-item>
        <a-row type="flex" justify="center">
          <a-col :sm="{ span: 24 }" :lg="{ span: 18 }">
            <span class="r-inline-text">Don't have an account?</span>
            <a class="r-inline-text r-text-primary" v-on:click="onModal('register', $event)" href="/">
              Sign up
            </a><br/>
            <span class="r-inline-text ">Forgot your password?</span>
            <a class="r-inline-text r-text-primary" v-on:click="onModal('password-request', $event)"
               href="/">
              Reset it
            </a>
          </a-col>
        </a-row>
      </a-form-item>
    </a-form>
    <r-notice :process="process"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
  </r-modal-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-login',
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      formName: 'login',
      fields: ['email', 'password'],
      form: this.$form.createForm(this, {name: 'form_login'}),
      errors: [],
      process: 'isSuccess',
      redirectTo: '',
      message: "Thank you for successfully confirming your credentials! Please wait a little more, and pay less with Shopple",
    };
  },
  computed: mapGetters({
    store: "shop/store",
    user: "auth/user",
    isLoggedIn: "auth/isLoggedIn",
    current: "auth/current",
    processes: "base/processes",
    isValid: "form/isValid",
    hasForm: "base/hasForm",
  }),
  created() {
  },
  methods: {
    onPost(event) {
      event.preventDefault();

      this.form.validateFields((errors, values) => {
        if (!errors) {
          let params = Object.assign({}, values);

          this.onLogin(params);
        }
      });
    },
    async onLogin(params) {
      let $this = this;

      let payload = {
        params: params,
        route: '/login',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: true,
      };

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
            $this.$message.success('Welcome back, ' + $this.user.name + '. Enjoy your shopping with Shopple.');
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
        }
      });
    }
  }
};
</script>
