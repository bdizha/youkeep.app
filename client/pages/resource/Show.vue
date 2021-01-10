<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-bg-primary-light">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start">
                <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <r-space></r-space>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                           :lg="{ span: 16 }"
                           style="text-align: left;">
                      <h4 class="r-heading-light r-text-uppercase">
                        How does Paise work?
                      </h4>
                      <h1 class="r-heading r-text-secondary">
                        <span class="r-text-secondary">Shop more,</span><br>
                        <span class="r-text-secondary">Pay less</span>
                      </h1>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <h4 class="r-heading-light">
                        We're a better way to shopping. Pay in 3 installments with zero interest
                        when you pay on time.
                      </h4>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                           :lg="{ span: 18 }">
                      <a-row :gutter="[24,24]" type="flex" justify="start">
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <a-button class="r-btn-secondary"
                                    block
                                    type="secondary"
                                    size='default'>
                            Sign up
                          </a-button>
                        </a-col>
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <a-button class="r-btn-bordered-purple"
                                    block
                                    type="secondary"
                                    size='default'>
                            Shop directory
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                  <r-space></r-space>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-primary"
                         style="background-image: url('/images/welcome-02.jpg')">
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <r-steps :has-wave="false" :has-title="false"></r-steps>
  </r-page>
</template>
<script>
export default {
  name: 'r-resource-show',
  props: {},
  data() {
    return {
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted() {
    this.modal = this.$store.state.modal;
  },
  methods: {},
};
</script>
