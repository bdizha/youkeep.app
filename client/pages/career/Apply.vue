<template>
  <r-page>
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 12 }"
             :md="{ span: 12 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-card>
          <nuxt-link :to="'/career/' + position.slug">
            <h3 class="r-heading">
              <a-icon type="left"/>
              Back to position
            </h3>
          </nuxt-link>
          <h4 class="r-heading">
            <a-icon type="solution"/>
            {{ position.type_formatted }}
          </h4>
          <h4 class="r-heading-light">
            <a-icon type="bank"/>
            {{ position.department }}
          </h4>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 12 }"
             :md="{ span: 12 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{span: 24}" :md="{span: 24}" :xs="{span: 24}">
            <a-breadcrumb class="r-mb-24">
              <a-breadcrumb-item>
                <nuxt-link :to="'/career/openings'"
                           class="r-text-primary"
                >
                  Jop openings
                </nuxt-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                <nuxt-link :to="'/career/' + position.slug"
                           class="r-text-primary"
                >
                  {{ position.title }}
                </nuxt-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                <span class="r-text-view-more">
                    Apply
                </span>
              </a-breadcrumb-item>
            </a-breadcrumb>
          </a-col>
          <a-col :lg="{span: 24}" :md="{span: 24}" :xs="{span: 24}" class="r-padding-48">
            <a-card>
              <a-form v-if="!isSuccessful"
                      :form="formApply"
                      @submit="onSend"
              >
                <a-form-item>
                  <h2 class="r-heading r-text-secondary">
                    Submit your application
                  </h2>
                </a-form-item>
                <a-form-item label="Resume/CV">
                  <a-upload
                    v-decorator="['resume', { rules: [{ required: true, message: 'Please upload your resume/CV' }] }]"
                    :accept="accept"
                    :multiple="true"
                    action="/career/resume"
                    name="resume"
                  >
                    <a-button size="large">
                      <a-icon type="paper-clip"/>
                      Attach resume/CV
                    </a-button>
                  </a-upload>
                </a-form-item>
                <a-row :gutter="24" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Full name">
                      <a-input
                        v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
                        placeholder="Your full name"
                        size="large"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Your mobile">
                      <a-input
                        v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile' }] }]"
                        placeholder="Your mobile"
                        size="large"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Email address">
                      <a-input
                        v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"
                        placeholder="Your Email Address"
                        size="large"
                        type="email"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Current company">
                      <a-input
                        v-decorator="['company', { rules: [{ required: true, message: 'Please enter your current company' }] }]"
                        placeholder="Your current company"
                        size="large"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Linkedin URL">
                      <a-input
                        v-decorator="['public_url', { rules: [{ required: false, message: 'Please enter your public URL' }] }]"
                        placeholder="Your Linkedin URL"
                        size="large"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-form-item label="Other URL">
                      <a-input
                        v-decorator="['url_url', { rules: [{ required: false, message: 'Please enter your other URL' }] }]"
                        placeholder="Your other URL"
                        size="large"
                      >
                      </a-input>
                    </a-form-item>
                  </a-col>
                </a-row>
                <a-form-item label="Cover letter">
                  <a-textarea
                    v-decorator="['cover_letter', { rules: [{ required: true, message: 'Please enter your cover letter' }] }]"
                    :auto-size="{ minRows: 2, maxRows: 6 }"
                    placeholder="Your cover letter"
                    type="textarea"
                  >
                  </a-textarea>
                </a-form-item>
                <a-form-item class="r-margin-top-48">
                  <a-row :gutter="24" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                           class="r-text-left"
                    >
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                           class="r-text-left"
                    >
                      <a-button block class="r-btn-secondary" html-type="submit" size="large"
                                type="secondary"
                                @click="onSend"
                      >
                        Submit application
                      </a-button>
                    </a-col>
                  </a-row>
                </a-form-item>
              </a-form>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-career-apply',
  props: {},
  data () {
    return {
      accept: null,
      formApply: this.$form.createForm(this, { name: 'form_apply' }),
      hasData: false,
      errors: [],
      isSuccessful: false,
      isProcessing: false,
      redirectTo: ''
    }
  },
  async asyncData ({ store, params, query }) {
    try {
      const path = `/career/${params.slug}`
      await store.dispatch('base/onPosition', { 'route': path })
    } catch (e) {
      console.error('onStore errors')
      console.log(e)
    }
  },
  computed: mapGetters({
    position: 'base/position',
    modal: 'base/modal'
  }),
  created () {
    this.accept = this.$store.state.accept
  },
  methods: {
    async payload () {
      const path = this.$route.path
      await this.$store.dispatch('base/onPosition', { 'route': path })
    },
    onSend (event) {
      event.preventDefault()

      this.formApply.validateFields((err, values) => {
        if (!err) {
          console.log('Submitting the application...', values)

          this.isProcessing = true

          let params = Object.assign({}, values)
          let $this = this

          params.resume = params.resume.file.response.page
          params.position_id = $this.position.id

          let path = this.$route.path
          HTTP.post(path, params)
            .then(response => {
              console.log('Sending the application')
              $this.isSuccessful = true
              $this.modal.message = 'Thank you. Your application has been successfully forwarded to our HR department. We will be in touch with you'
            })
            .catch(e => {
              $this.isSuccessful = false
            })
        } else {
          this.isSuccessful = false
          console.error(err)
        }
      })
    }
  }
}
</script>
