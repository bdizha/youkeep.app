<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card class="r-p-24">
              <a-card-meta>
                <template slot="description">
                  <h1 class="r-heading r-text-secondary">
                    How can we help?
                  </h1>
                  <p class="r-text-normal">
                    We'd love to hear from you! Feel free to reach out with any questions or comments below.
                  </p>
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                           style="text-align: left;">
                      <h4 class="r-heading">
                        Want to join us?
                      </h4>
                      <p class="r-text-normal">
                        <span>Then apply </span>
                        <nuxt-link target="_blank" to="/careers">here</nuxt-link>
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                           style="text-align: left;">
                      <h4 class="r-heading">
                        Need answers?
                      </h4>
                      <p class="r-text-normal">
                        <span>Check out the </span>
                        <nuxt-link target="_blank" to="/help">Help center</nuxt-link>
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                           style="text-align: left;">
                      <h4 class="r-heading">
                        Email
                      </h4>
                      <p class="r-text-normal">
                        <a href="mailto:info@shopple.app" target="_blank">info@shopple.app</a>
                      </p>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
            <a-card class="r-p-24">
              <a-card-meta>
                <template slot="description">
                  <div class="r-page-header-photo">
                    <div class="r-page-primary"
                         style="background-image: url('/images/welcome.jpg')">
                    </div>
                  </div>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
            <a-form v-if="hasForm"
                    class="ant-form ant-form-vertical"
                    @submit="onSubmit"
                    :form="form">
              <a-form-item>
                <a-row type="flex" justify="center">
                  <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                    <h2 class="r-heading">
                      Get in touch
                    </h2>
                    <p class="r-text-normal">
                      How can we help? Just a quick note: try visiting our
                      <nuxt-link to="/help">Help center</nuxt-link>
                      that maybe of help only for general queries that we frequently receive from
                      our customers.
                    </p>
                  </a-col>
                </a-row>
              </a-form-item>
              <a-form-item label="Select a department">
                <a-select
                  labelInValue
                  :defaultValue="categories[0]"
                  size="large"
                  @change="onCategory"
                  style="min-width: 100%;">
                  <a-select-option v-for="(option, index) in categories"
                                   :key="index"
                                   :value="option.key">
                    <span class="r-sort-value">{{ option.label }}</span>
                  </a-select-option>
                </a-select>
              </a-form-item>
              <a-form-item label="Name">
                <a-input
                  size="large"
                  placeholder="Your full name"
                  v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]">
                  <a-icon slot="prefix" type="mail"/>
                </a-input>
              </a-form-item>
              <a-form-item label="Mobile">
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
                  <a-icon slot="prefix" type="user"/>
                </a-input>
              </a-form-item>
              <a-form-item label="Notes">
                <a-input type="textarea"
                         size="large"
                         placeholder="Your message"
                         v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your message' }] }]">
                  <a-icon slot="prefix" type="user"/>
                </a-input>
              </a-form-item>
              <a-row type="flex" justify="center">
                <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                </a-col>
                <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button block @click="onSubmit" :size="'large'"
                            type="secondary"
                            html-type="submit"
                            class="r-btn-secondary">
                    Save
                  </a-button>
                </a-col>
              </a-row>
            </a-form>
            <r-notice :process="current"></r-notice>
            <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

const CATEGORIES = [
  {
    label: 'I would like to say thank you',
    key: 1
  },
  {
    label: 'I have a general query',
    key: 2
  },
  {
    label: 'I have a support request',
    key: 3
  },
  {
    label: 'I need some shopping assistance',
    key: 4
  }
];

export default {
  layout: 'page',
  name: 'r-about-us',
  props: {},
  data() {
    return {
      current: 'contact-us',
      fields: ['name', 'mobile', 'email', 'notes'],
      form: this.$form.createForm(this, {name: 'form_contact'}),
      category_id: 1,
      message: 'Thank you for contacting us and we should be responding to your contact request soon.',
      categories: CATEGORIES,
      hasError: false,
      errors: []
    };
  },
  computed: mapGetters({
    current: "form/current",
    processes: "base/processes",
    hasForm: "base/hasForm",
  }),
  methods: {
    onSubmit(event) {
      event.preventDefault();

      this.hasError = false;
      this.form.validateFields((error, values) => {
        if (!error) {
          let params = Object.assign({}, values);

          params.category_id = this.category_id;
          params.is_active = true;

          let payload = {
            params: params,
            route: '/contact-us',
            current: this.current,
            message: this.message
          };

          this.$store.dispatch('form/onPost', payload);
        }
      });
    },
    onCategory(category) {
      this.category_id = category.key;
    }
  },
};
</script>
