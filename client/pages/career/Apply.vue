<template>
  <r-page>
    <a-row v-if="position" type="flex" justify="center" align="middle">
      <a-col :span="24">
        <a-row type="flex" justify="center" align="middle" class="r-art-primary">
          <a-col :xs="{span: 24}" :sm="{span: 24}" :lg="{span: 12}"
                 class="r-margin-vertical-48 r-text-center">
            <a-row type="flex" justify="center" align="middle">
              <a-col :xs="{span: 24}" :sm="{span: 24}" :lg="{span: 24}">
                <h1 class="r-heading r-text-white">
                  {{ position.title }}
                </h1>
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle">
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="environment"/>
                  <br>
                  {{ position.city.name }}
                </h3>
              </a-col>
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="solution"/>
                  <br>
                  {{ position.type_formatted }}
                </h3>
              </a-col>
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="bank"/>
                  <br>
                  {{ position.department }}
                </h3>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-padding-48">
            <a-breadcrumb class="r-same-height">
              <a-breadcrumb-item>
                <router-link class="r-text-primary r-text-view-more"
                             :to="'/career/openings'">
                  Jop openings
                </router-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                <router-link class="r-text-primary r-text-view-more"
                             :to="'/career/' + position.slug">
                  {{ position.title }}
                </router-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                                <span class="r-text-view-more">
                                    Apply
                                </span>
              </a-breadcrumb-item>
            </a-breadcrumb>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-bg-white r-padding-48">
            <a-row class="" type="flex" justify="space-around" align="middle">
              <a-col :lg="{span: 24}" class="">
                <a-form v-if="!isSuccessful" :layout="'horizontal'"
                        @submit="apply"
                        :form="formApply">
                  <a-form-item>
                    <a-row type="flex" justify="center">
                      <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h2 class="r-heading">
                          Submit your application
                        </h2>
                      </a-col>
                    </a-row>
                  </a-form-item>
                  <a-form-item label="Resume/CV">
                    <a-upload
                      name="resume"
                      :multiple="true"
                      :accept="accept"
                      action="/career/resume"
                      v-decorator="['resume', { rules: [{ required: true, message: 'Please upload your resume/CV' }] }]">
                      <a-button size="large">
                        <a-icon type="paper-clip"/>
                        Attach resume/CV
                      </a-button>
                    </a-upload>
                  </a-form-item>
                  <a-row :gutter="24" type="flex" justify="start">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Full name">
                        <a-input
                          size="large"
                          placeholder="Your full name"
                          v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Your mobile">
                        <a-input
                          size="large"
                          placeholder="Your mobile"
                          v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Email address">
                        <a-input type="email"
                                 size="large"
                                 placeholder="Your email address"
                                 v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Current company">
                        <a-input
                          size="large"
                          placeholder="Your current company"
                          v-decorator="['company', { rules: [{ required: true, message: 'Please enter your current company' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Linkedin URL">
                        <a-input
                          size="large"
                          placeholder="Your Linkedin URL"
                          v-decorator="['public_url', { rules: [{ required: false, message: 'Please enter your public URL' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-form-item label="Other URL">
                        <a-input
                          size="large"
                          placeholder="Your other URL"
                          v-decorator="['url_url', { rules: [{ required: false, message: 'Please enter your other URL' }] }]">
                        </a-input>
                      </a-form-item>
                    </a-col>
                  </a-row>
                  <a-form-item label="Cover letter">
                    <a-textarea type="textarea"
                                :auto-size="{ minRows: 2, maxRows: 6 }"
                                placeholder="Your cover letter"
                                v-decorator="['cover_letter', { rules: [{ required: true, message: 'Please enter your cover letter' }] }]">
                    </a-textarea>
                  </a-form-item>
                  <a-form-item class="r-margin-top-48">
                    <a-row :gutter="24" type="flex" justify="center">
                      <a-col class="gutter-row r-text-left" :xs="{ span: 12 }"
                             :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }">
                      </a-col>
                      <a-col class="gutter-row r-text-left" :xs="{ span: 12 }"
                             :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }">
                        <a-button block @click="onSend" :size="'large'" type="primary"
                                  html-type="submit"
                                  class="ant-btn-secondary r-btn-primary">
                          Submit application
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-form-item>
                </a-form>
                <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
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
  export default {
    name: 'r-career-apply',
    props: {},
    data() {
      return {
        accept: null,
        formApply: this.$form.createForm(this, {name: 'form_apply'}),
        modal: {
          current: null,
          message: null,
        },
        hasData: false,
        position: {
          city: {name: null}
        },
        errors: [],
        isSuccessful: false,
        isProcessing: false,
        store: {
          slug: 'all'
        },
        redirectTo: ''
      }
    },
    mounted() {
      this.modal = this.$store.state.modal;
      this.accept = this.$store.state.accept;

      this.modal.isVisible = true;
      this.$store.dispatch('app/onModal', modal);
      this.payload();
    },
    methods: {
      payload() {
        this.store = this.$store.state.store;

        let params = {};
        let path = this.$route.path;
        let $this = this;

        axios.get(path, params)
          .then(response => {
            $this.position = response.data.position;
            $this.hasData = true;
          })
          .catch(e => {
            console.log(e);
          });
      },
      onSend(event) {
        event.preventDefault();

        this.formApply.validateFields((err, values) => {
          if (!err) {
            console.log('Submitting the application...', values);

            this.isProcessing = true;

            let params = Object.assign({}, values);
            let $this = this;

            params.resume = params.resume.file.response.page;
            params.position_id = $this.position.id;

            let path = this.$route.path;
            HTTP.post(path, params)
              .then(response => {
                console.log('Sending the application');
                $this.isSuccessful = true;
                $this.modal.message = 'Thank you. Your application has been successfully forwarded to our HR department. We will be in touch with you';
              })
              .catch(e => {
                $this.isSuccessful = false;
              });
          } else {
            this.isSuccessful = false;
            console.error(err);
          }
        });
      },
    }
  };
</script>
