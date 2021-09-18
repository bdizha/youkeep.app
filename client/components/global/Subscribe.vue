<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta>
      <template slot="description">
        <a-row align="middle" class="r-text-center" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <div class="r-subscribe-title">
              <h2 class="r-same-height r-heading">
                <a-icon class="r-subscribe-icon" theme="filled" type="notification"/>
                Stay in touch
              </h2>
            </div>
            <p class="r-text-s">
              By clicking on "Subscribe" you declare your consent to
              the
              advertising
              emails. <a class="r-text-secondary" href="/privacy" target="_blank">Privacy
              statement</a>
            </p>
          </a-col>
          <a-col ::md="{ span: 24 }" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form v-if="!hasForm || true"
                    :form="form"
                    class="ant-form ant-form-vertical r-form-white"
                    @submit="onPost"
            >
              <a-row :gutter="[24,24]" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-left">
                  <a-row :gutter="24" align="middle" class="r-mt-24" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-form-item label="First name">
                        <a-input
                          v-decorator="['full_name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
                          placeholder="Your full name"
                          size="large"
                        >
                          <a-icon slot="prefix" type="user"/>
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-form-item label="Email address">
                        <a-input
                          v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please enter your email address' }] }]"
                          placeholder="Your Email Address"
                          size="large"
                        >
                          <a-icon slot="prefix" type="mail"/>
                        </a-input>
                      </a-form-item>
                    </a-col>
                  </a-row>
                  <a-form-item>
                    <a-radio-group v-model="userType"
                                   :default-value="1"
                                   name="type" @change="onUserType"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <a-radio :value="1">
                            I'm a business
                          </a-radio>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <a-radio :value="2">
                            I'm a shopper
                          </a-radio>
                        </a-col>
                      </a-row>
                    </a-radio-group>
                  </a-form-item>
                </a-col>
              </a-row>
              <a-row justify="end" type="flex">
                <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-button block class="r-btn-secondary"
                            html-type="submit"
                            size="large"
                            type="secondary"
                  >
                    Yes, please
                    <a-icon type="right"/>
                  </a-button>
                </a-col>
              </a-row>
            </a-form>
            <r-notice process="isSuccess"></r-notice>
            <r-spinner v-if="false" :is-absolute="true" process="isRunning"></r-spinner>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-subscribe',
  props: {
    size: { type: Number, required: false, default: 24 }
  },
  data () {
    return {
      formName: 'subscribe',
      message: 'Thank you for your interest in our communications. We\'ve since sent you a confirmation email.',
      userType: 1,
      form: this.$form.createForm(this, { name: 'form_subscribe' }),
    }
  },
  computed: mapGetters({
    processes: 'form/processes',
    current: 'form/current',
    hasForm: 'base/hasForm',
  }),
  methods: {
    async onPost (event) {
      event.preventDefault()

      this.hasError = false
      this.form.validateFields((error, values) => {
        let params = Object.assign({}, values)

        params.type = this.userType
        params.is_active = true

        let payload = {
          params: params,
          route: '/subscribe',
          current: this.formName
        }

        this.$store.dispatch('form/onPost', payload)
      })
    },
    onUserType (e) {
      this.userType = e.target.value
    },
  },
}
</script>
