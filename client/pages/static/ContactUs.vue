<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-page-welcome r-bg-blue">
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                       style="text-align: left;">
                  <a-card hoverable>
                    <a-card-meta>
                      <template slot="description">
                        <h1 class="r-heading r-text-primary">
                          Talk to us
                        </h1>
                        <p class="r-text-normal">
                          We'd love to hear from you! Feel free to reach out with any questions or comments below.
                        </p>
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                                 :lg="{ span: 12 }"
                                 style="text-align: left;">
                            <h4 class="r-heading-light">
                              Want to join us?
                            </h4>
                            <p class="r-text-normal">
                              <span>Then apply </span>
                              <router-link target="_blank" to="/careers">here</router-link>
                            </p>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                                 :lg="{ span: 12 }"
                                 style="text-align: left;">
                            <h4 class="r-heading-light">
                              Need answers now?
                            </h4>
                            <p class="r-text-normal">
                              <span>Check out the </span>
                              <router-link target="_blank" to="/help">Help center</router-link>
                            </p>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                                 :lg="{ span: 12 }"
                                 style="text-align: left;">
                            <h4 class="r-heading-light">
                              Email
                            </h4>
                            <p class="r-text-normal">
                              <a href="mailto:info@Shopple.com" target="_blank">info@Shopple.com</a>
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/welcome.jpg')">
                </div>
              </div>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                      class="ant-form ant-form-vertical"
                      @submit="onSend"
                      :form="formContact">
                <a-form-item>
                  <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                      <h2 class="r-heading">
                        Get in touch
                      </h2>
                      <p class="r-text-normal">
                        How can we help? Just a quick note: try visiting our
                        <router-link to="/help">Help center</router-link>
                        that maybe of help only for general queries that we frequently recieve from
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
                    <a-button block @click="onSend" :size="'large'" type="primary"
                              html-type="submit"
                              class="ant-btn-secondary r-btn-primary">
                      Save
                    </a-button>
                  </a-col>
                </a-row>
              </a-form>
              <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
              <r-notice v-if="isSuccessful" :message="message"></r-notice>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
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
  name: 'r-contact-us',
  props: {},
  data() {
    return {
      fields: ['name', 'mobile', 'email', 'notes'],
      formContact: this.$form.createForm(this, {name: 'form_contact'}),
      category: 1,
      message: 'Thank you for contacting us and we should be responding to your contact request soon. Thanks for vising us.',
      isSuccessful: false,
      isProcessing: false,
      categories: CATEGORIES,
      hasError: false,
      errors: []
    };
  },
  mounted() {
  },
  methods: {
    onSend(event) {
      event.preventDefault();

      this.hasError = false;

      this.formContact.validateFields((error, values) => {
        if (!error) {
          this.isProcessing = true;

          console.log('Making request...', values);

          values['category'] = this.category;

          let params = Object.assign({}, values);
          let $this = this;

          console.log('Request params...', params);

          let path = '/contact/send';
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
        } else {
          this.hasError = true;
          console.error(error);
        }
      });
    },
    onResponse(response, $this) {
      $this.isSuccessful = true;
      $this.formContact.resetFields();

      setTimeout(function () {
        $this.isProcessing = false;
      }, 3000);
    },
    onError(response, $this) {
      let errors = response.data.errors;

      this.fields.forEach(function (field) {
        if (errors[field] != undefined) {
          let value = $this.formContact.getFieldValue(field);
          let fields = {};
          fields[field] = {
            'value': value,
            "errors": [
              {
                "notes": errors[field][0],
                "field": field
              }
            ]
          };
          $this.formContact.setFields(fields);
          console.log('what is this :: ' + field, errors[field][0]);
        }
      });

      setTimeout(function () {
        this.isProcessing = false;
        this.isSuccessful = false;
      }, 3000);
    },
    onCategory(category) {
      this.category = category.key;
    }
  },
};
</script>
