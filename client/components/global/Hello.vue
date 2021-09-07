<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col v-show="hasForm" :xs="{ span: 24 }" class="r-text-left">
      <h2 class="r-heading-light">
        {{ title }}
      </h2>
    </a-col>
    <a-col v-show="hasForm" :xs="{ span: 24 }" class="r-text-left">
      <p class="r-text-normal">
        How can we help? Just a quick note: try visiting our
        <nuxt-link to="/help">Help center</nuxt-link>
        that maybe of help only for general queries that we frequently receive from businesses.
      </p>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form v-show="hasForm"
              :form="form"
              class="ant-form ant-form-vertical"
              @submit="onSubmit"
      >
        <a-form-item label="Select a reason">
          <a-select
            :defaultValue="categories[0]"
            labelInValue
            size="large"
            style="min-width: 100%;"
            @change="onCategory"
          >
            <a-select-option v-for="(option, index) in categories"
                             :key="index"
                             :value="option.key"
            >
              <span class="r-sort-value">{{ option.label }}</span>
            </a-select-option>
          </a-select>
        </a-form-item>
        <a-form-item label="Name">
          <a-input
            v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
            placeholder="Your full name"
            size="large"
          >
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Mobile">
          <a-input
            v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
            placeholder="Your mobile number"
            size="large"
          >
            <a-icon slot="prefix" type="mobile"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Email address">
          <a-input v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
                   placeholder="Your Email Address"
                   size="large"
                   type="email"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Message">
          <a-input v-decorator="['message', { rules: [{ required: true, message: 'Please enter your message' }] }]"
                   placeholder="Your message"
                   size="large"
                   type="textarea"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-row justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-button block
                      class="r-btn-blue"
                      html-type="submit"
                      size="large"
                      type="primary"
                      @click="onSubmit"
            >
              Send
              <a-icon type="right"></a-icon>
            </a-button>
          </a-col>
        </a-row>
      </a-form>
      <r-notice v-show="!hasForm" process="isSuccess"></r-notice>
      <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-hello',
  props: {
    title: { type: String, required: false, default: 'Get in touch today!' },
    hasPlan: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      current: 'contact-us',
      fields: ['name', 'mobile', 'email', 'message'],
      form: this.$form.createForm(this, { name: 'form_contact' }),
      category_id: 1,
      message: 'Thank you for contacting us and we should be responding to your contact request soon.',
      hasError: false,
      errors: []
    }
  },
  computed: mapGetters({
    processes: 'base/processes',
    hasForm: 'base/hasForm',
    categories: 'content/reasons'
  }),
  methods: {
    onSubmit (event) {
      event.preventDefault()

      const $this = this
      this.hasError = false
      this.form.validateFields(async (error, values) => {
        if (!error) {
          const params = Object.assign({}, values)

          params.category_id = this.category_id
          params.is_active = true

          $this.form = $this.$form.createForm($this, { name: 'form_contact' })
          await this.$store.dispatch('base/onNotice', this.message)

          const payload = {
            params,
            route: '/contact-us',
            current: this.current
          }
          await this.$store.dispatch('form/onPost', payload)
        }
      })
    },
    onCategory (category) {
      this.category_id = category.key
    }
  }
}
</script>
