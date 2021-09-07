<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <div class="r-pull-h-24 r-border-none r-pt-81">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" align="top" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[96,48]" align="top" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h3 class="r-heading-light r-text-uppercase">
                                <span class="r-text-primary">Talk to us</span>
                              </h3>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h1 class="r-heading">
                                How can we help?
                              </h1>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                We'd love to hear from you! Feel free to reach out with any questions or comments below.
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                       style="text-align: left;"
                                >
                                  <h4 class="r-heading">
                                    Want to join us?
                                  </h4>
                                  <p class="r-text-medium">
                                    <span>Then apply </span>
                                    <nuxt-link class="r-text-primary" target="_blank" to="/careers">here</nuxt-link>
                                  </p>
                                </a-col>
                                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                       style="text-align: left;"
                                >
                                  <h4 class="r-heading">
                                    Need answers?
                                  </h4>
                                  <p class="r-text-medium">
                                    <span>Check out the </span>
                                    <nuxt-link class="r-text-primary" target="_blank" to="/help">Help center</nuxt-link>
                                  </p>
                                </a-col>
                                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                       style="text-align: left;"
                                >
                                  <h4 class="r-heading">
                                    Email
                                  </h4>
                                  <p class="r-text-medium">
                                    <a class="r-text-primary" href="mailto:info@addtract.com" target="_blank">info@addtract.com</a>
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-card class="r-bg-primary-light">
                        <r-hello></r-hello>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({}),
  methods: {}
}
</script>
