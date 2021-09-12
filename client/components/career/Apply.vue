<template>
  <r-page>
    <a-row v-if="position" align="middle" justify="center" type="flex">
      <a-col :span="24">
        <a-row align="middle" class="r-art-primary" justify="center" type="flex">
          <a-col :lg="{span: 12}" :sm="{span: 24}" :xs="{span: 24}"
                 class="r-mv-48 r-text-center"
          >
            <a-row align="middle" justify="center" type="flex">
              <a-col :lg="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
                <h2 class="r-heading r-text-white">
                  {{ position.title }}
                </h2>
              </a-col>
            </a-row>
            <a-row align="middle" justify="center" type="flex">
              <a-col :lg="{span: 6}" :sm="{span: 8}" :xs="{span: 8}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="environment"/>
                  <br>
                  {{ position.city.name }}
                </h3>
              </a-col>
              <a-col :lg="{span: 6}" :sm="{span: 8}" :xs="{span: 8}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="solution"/>
                  <br>
                  {{ position.type_formatted }}
                </h3>
              </a-col>
              <a-col :lg="{span: 6}" :sm="{span: 8}" :xs="{span: 8}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="bank"/>
                  <br>
                  {{ position.department }}
                </h3>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{span: 12}" :md="{span: 16}" :xs="{span: 24}" class="r-p-48">
            <a-breadcrumb class="r-same-height">
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
        </a-row>
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{span: 12}" :md="{span: 16}" :xs="{span: 24}" class="r-bg-white r-p-48">
            <a-row align="middle" class="" justify="space-around" type="flex">
              <a-col :lg="{span: 24}" class="">
                <a-form v-if="!isSuccessful"
                        :form="formApply"
                        @submit="apply"
                >
                  <a-form-item>
                    <a-row :gutter=[24,24] justify="center" type="flex">
                      <a-col :xs="{ span: 24 }" class="r-text-left">
                        <h2 class="r-heading r-text-secondary">
                          Submit your application
                        </h2>
                      </a-col>
                    </a-row>
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
                <r-spinner v-if="isProcessing"></r-spinner>
                <r-notice v-if="isSuccessful" :message="message"></r-notice>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { HTTP } from '../../app'
import { mapGetters } from 'vuex'

export default {
  props: {},
  data () {
    return {
      accept: null,
      formApply: this.$form.createForm(this, { name: 'form_apply' }),
      hasData: false,
      position: {
        city: { name: null }
      },
      errors: [],
      isSuccessful: false,
      isProcessing: false,
      redirectTo: ''
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
  }),
  created () {
    this.accept = this.$store.state.accept

    const modal = {}
    modal.isVisible = false
    this.$store.dispatch('base/onModal', modal)
    this.payload()
  },
  methods: {
    payload () {
      let params = {}
      let path = this.$route.path
      let $this = this

      axios.get(path, params)
        .then(response => {
          $this.position = response.data.position
          $this.hasData = true
        })
        .catch(e => {
          console.log(e)
        })
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
    },
  }
}
</script>
