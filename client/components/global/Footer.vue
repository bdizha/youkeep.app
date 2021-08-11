<template>
  <a-row justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row v-if="hasDownload && false" class="r-mb-24" justify="center" type="flex">
        <a-col v-if="hasDownload && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-shop-now></r-shop-now>
        </a-col>
        <a-col v-if="hasSubscribe && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-subscribe></r-subscribe>
        </a-col>
      </a-row>
      <a-layout-footer>
        <a-row justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <div class="r-p-24 r-mv-96">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                    <a-col class="r-footer-center-sm" :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <nuxt-link to="/">
                            <img alt="Graphigem - Venture Catalysts"
                                 class="r-footer-logo /"
                                 src="/images/logo_white.png"
                            >
                          </nuxt-link>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading">
                           Grow your business.
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-normal">
                            Graphigem is an African venture catalyst firm that envisions, executes and transforms innovative products into profitable businesses.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading r-text-uppercase">
                                For Partners
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/partner/register">Become a Partner</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/approach">Approach</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/zerosum">ZeroSum Fund</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/framework">Working Model</nuxt-link>
                              </div>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading r-text-uppercase">
                                Company
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/about-us">About Us</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/portfolio">Portfolio</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/careers">Careers</nuxt-link>
                              </div>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <div class="r-mt-24">
                <a-card class="r-bg-dark-grey">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex" class="r-footer-center-sm">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                          <nuxt-link class="r-text-white" to="/privacy">
                            Privacy
                          </nuxt-link>
                          <span class="r-text-white">~</span>
                          <nuxt-link class="r-text-white r-same-height" to="/terms">Terms</nuxt-link>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                          <div class="r-text-white r-same-height">
                            &copy; Graphigem 2021
                            All Rights Reserved
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <nuxt-link class="r-same-height r-footer-link" to="/contact-us">
                            <a-button block
                                      class="r-btn-bordered-white"
                                      size="large"
                            >
                              Contact Us
                            </a-button>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-card>
              </div>
            </a-col>
          </a-row>
        </div>
          </a-col>
        </a-row>
      </a-layout-footer>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-footer',
  props: {
    hasAddress: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    hasDownload: 'base/hasDownload',
    hasSubscribe: 'base/hasSubscribe',
    hasFooter: 'base/hasFooter'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      console.log('modal', modal)

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
