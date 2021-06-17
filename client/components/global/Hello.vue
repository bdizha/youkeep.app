<template>
  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-form v-show="hasForm"
              class="ant-form ant-form-vertical"
              @submit="onSubmit"
              :form="form"
      >
        <a-form-item>
        </a-form-item>
        <a-form-item label="Select a reason">
          <a-select
            labelInValue
            :defaultValue="categories[0]"
            size="large"
            @change="onCategory"
            style="min-width: 100%;"
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
            size="large"
            placeholder="Your full name"
            v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
          >
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Mobile">
          <a-input
            size="large"
            placeholder="Your mobile number"
            v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
          >
            <a-icon slot="prefix" type="mobile"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Email address">
          <a-input type="email"
                   size="large"
                   placeholder="Your email address"
                   v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-form-item label="Notes">
          <a-input type="textarea"
                   size="large"
                   placeholder="Your message"
                   v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your message' }] }]"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-row type="flex" justify="center">
          <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 24 }"
                 :lg="{ span: 24 }"
          >
            <a-button block
                      @click="onSubmit" size="large"
                      type="primary"
                      html-type="submit"
                      class="r-btn-primary"
            >
              Send
              <a-icon type="right"></a-icon>
            </a-button>
          </a-col>
        </a-row>
      </a-form>
      <r-notice :process="current"></r-notice>
      <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

const CATEGORIES = [
  {
    label: 'I\'m looking to outsource my bookkeeping/tax filing',
    key: 1
  },
  {
    label: 'I want assistance with doing my own bookkeeping',
    key: 2
  },
  {
    label: 'I\'ve questions about doing my own bookkeeping',
    key: 3
  },
  {
    label: 'I\'ve a general/other query',
    key: 4
  }
]

export default {
  name: 'r-hello',
  props: {},
  data () {
    return {
      current: 'contact-us',
      fields: ['name', 'mobile', 'email', 'notes'],
      form: this.$form.createForm(this, { name: 'form_contact' }),
      category_id: 1,
      message: 'Thank you for contacting us and we should be responding to your contact request soon.',
      categories: CATEGORIES,
      hasError: false,
      errors: []
    }
  },
  computed: mapGetters({
    processes: 'base/processes',
    hasForm: 'base/hasForm'
  }),
  methods: {
    onSubmit (event) {
      event.preventDefault()

      this.hasError = false
      this.form.validateFields((error, values) => {
        if (!error) {
          const params = Object.assign({}, values)

          params.category_id = this.category_id
          params.is_active = true

          const payload = {
            params: params,
            route: '/contact-us',
            current: this.current,
            message: this.message
          }

          this.$store.dispatch('form/onPost', payload)
        }
      })
    },
    onCategory (category) {
      this.category_id = category.key
    }
  }
}
</script>
