<template>
  <a-row class="r-mt-96" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row v-if="hasDownload && false" class="r-mb-24" justify="center" type="flex">
        <a-col v-if="hasDownload && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-shop-now></r-shop-now>
        </a-col>
        <a-col v-if="hasSubscribe && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-subscribe></r-subscribe>
        </a-col>
      </a-row>
        <a-row :gutter="[24, 24]" justify="center" type="flex">
          <a-col v-if="hasLocations" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-locations></r-locations>
          </a-col>
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <div class="r-footer-center-sm r-mv-24">
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
                              <img alt="Brickcent - Fractional real estate investment."
                                   class="r-footer-logo /"
                                   src="/images/logo_dark.png"
                              >
                            </nuxt-link>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading">
                              Invest smart in property.
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal">
                              Brickcent is a fractional investment platform to make property accessible to everyone.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <a-row :gutter="[24,48]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :xs="{ span: 24}">
                            <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <h4 class="r-heading r-text-uppercase">
                                  Product
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/invest">How it works</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/invest#auto">Auto Invest</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/invest#core">Core Invest</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/invest#prime">Prime Invest</nuxt-link>
                                </div>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :xs="{ span: 24}">
                            <a-row :gutter="[24,12]" align="top" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <h4 class="r-heading r-text-uppercase">
                                  Company
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/about-us">About Brickcent</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/properties">Properties</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/careers">Careers</nuxt-link>
                                </div>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :xs="{ span: 24}">
                            <a-row :gutter="[24,12]" align="top" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <h4 class="r-heading r-text-uppercase">
                                  Resources
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/help">Help Center</nuxt-link>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                <div class="r-footer-link">
                                  <nuxt-link to="/articles">Articles</nuxt-link>
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
                  <a-card class="r-bg-dark">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex" class="r-footer-center-sm">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                          <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                            <div class="r-text-white">
                              &copy; Brickent 2021
                            </div>
                          </a-col>
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                            <div class="r-text-white">
                              All Rights Reserved
                            </div>
                          </a-col>
                          <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                            <nuxt-link class="r-same-height r-footer-link" to="/contact-us">
                              <a-button block
                                        class="r-btn-blue-bordered"
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
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-footer',
  props: {
    hasAddress: { type: Boolean, required: false, default: true },
    hasLocations: { type: Boolean, required: false, default: false }
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
