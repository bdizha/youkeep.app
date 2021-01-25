<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta>
      <template slot="description">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <a-row class="r-text-center" type="flex" justify="start" align="middle">
                <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                       :lg="{ span: 24 }">
                  <div class="r-subscribe-title">
                    <h2 class="r-same-height r-heading">
                      <a-icon class="r-subscribe-icon" theme="filled" type="notification"/>
                      Stay in touch
                    </h2>
                  </div>
                  <p class="r-text-small">
                    By clicking on "Subscribe" you declare your consent to
                    the
                    advertising
                    emails. <a class="r-text-secondary" target="_blank" href="/privacy">Privacy
                    statement</a>
                  </p>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" ::md="{ span: 24 }" :lg="{ span: 24 }"
                       class="r-text-left">
                  <a-form v-if="!hasForm || true"
                          class="ant-form ant-form-vertical r-form-white"
                          :form="form"
                          @submit="onPost">
                    <a-row type="flex" justify="start" :gutter="[24,24]">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }" class="r-text-left">
                        <a-row class="r-mt-24" :gutter="24" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                            <a-form-item label="First name">
                              <a-input size="default"
                                       placeholder="Your full name"
                                       v-decorator="['full_name', { rules: [{ required: true, message: 'Please enter your full name' }] }]">
                                <a-icon slot="prefix" type="user"/>
                              </a-input>
                            </a-form-item>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                            <a-form-item label="Email address">
                              <a-input size="default"
                                       placeholder="Your email address"
                                       v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please enter your email address' }] }]">
                                <a-icon slot="prefix" type="mail"/>
                              </a-input>
                            </a-form-item>
                          </a-col>
                        </a-row>
                        <a-form-item>
                          <a-radio-group v-model="userType"
                                         @change="onUserType"
                                         name="type" :default-value="1">
                            <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
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
                      </a-col>
                    </a-row>
                    <a-row type="flex" justify="end">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                        <a-button block type="secondary"
                                  class="r-btn-secondary"
                                  size="default"
                                  html-type="submit">
                          Yes, please
                          <a-icon type="right"/>
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-form>
                  <r-notice process="isSuccess"></r-notice>
                  <r-spinner v-if="false" process="isRunning" :is-absolute="true"></r-spinner>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-subscribe',
  props: {
    size: {type: Number, required: false, default: 24}
  },
  data() {
    return {
      formName: 'subscribe',
      message: "Thank you for your interest in our communications. We've since sent you a confirmation email.",
      userType: 1,
      form: this.$form.createForm(this, {name: 'form_subscribe'}),
    };
  },
  computed: mapGetters({
    processes: "form/processes",
    current: "form/current",
    hasForm: "base/hasForm",
  }),
  methods: {
    async onPost(event) {
      event.preventDefault();

      this.hasError = false;
      this.form.validateFields((error, values) => {
        let params = Object.assign({}, values);

        params.type = this.userType;
        params.is_active = true;

        let payload = {
          params: params,
          route: '/subscribe',
          current: this.formName
        };

        this.$store.dispatch('form/onPost', payload);
      });
    },
    onUserType(e) {
      this.userType = e.target.value;
    },
  },
};
</script>
