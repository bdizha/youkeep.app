<template>
  <r-page>
    <a-row :gutter=[24,24] justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <div class="r-bg-primary-light">
          <a-row :gutter=[24,24] justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row align="middle" justify="start" type="flex">
                <a-col :lg="{ offset: 3, span: 9 }" :md="{ offset: 3, span: 9 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                       class="r-p-48"
                >
                  <r-space></r-space>
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                           s="r"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        How does Youkeep work?
                      </h4>
                      <h1 class="r-heading r-text-secondary">
                        <span class="r-text-secondary">Shop More,</span><br>
                        <span class="r-text-secondary">Pay Less.</span>
                      </h1>
                    </a-col>
                  </a-row>
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading-light">
                        We're a better way to shopping. Pay in 3 installments with zero interest
                        when you pay on time.
                      </h4>
                    </a-col>
                  </a-row>
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 20 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                               class="gutter-row"
                        >
                          <a-button block
                                    class="r-btn-secondary"
                                    size="default"
                                    type="secondary"
                          >
                            Sign up
                          </a-button>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                               class="gutter-row"
                        >
                          <a-button block
                                    class="r-btn-bordered-purple"
                                    size="default"
                                    type="secondary"
                          >
                            Shop directory
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                  <r-space></r-space>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-white"
                         style="background-image: url('/images/welcome-02.jpg')"
                    >
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <r-steps :has-title="false" :has-wave="false"></r-steps>
  </r-page>
</template>
<script>
export default {
  name: 'r-youkeep',
  props: {},
  data () {
    return {
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
