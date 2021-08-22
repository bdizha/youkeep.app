<template>
  <a-row justify="center" type="flex">
    <a-col :span="24">
      <a-row v-if="hasDownload && false" class="r-mb-24" justify="center" type="flex">
        <a-col v-if="hasDownload && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-shop-now></r-shop-now>
        </a-col>
        <a-col v-if="hasSubscribe && false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-subscribe></r-subscribe>
        </a-col>
      </a-row>
      <a-layout-footer>
        <div class="r-p-24">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" justify="center" type="flex">
                <a-col v-if="false" :lg="{ span: 24 }"
                       :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="r-ph-24"
                       style="background: url(/images/content/11.png) no-repeat;background-size: cover;"
                >
                  <div style="padding-bottom: 300px;"></div>
                </a-col>
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                    <a-col class="r-footer-center-sm" :lg="{ span: 4 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <nuxt-link to="/">
                            <img alt="Spazamall - Online shop"
                                 class="r-footer-logo /"
                                 src="/images/icon_pattern_dark.svg"
                            >
                          </nuxt-link>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            It's shopping time!
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <a-button class="r-btn-bordered-grey"
                                    size="large"
                                    @click.native="onModal('delivery')"
                          >
                            Delivery address ...
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 20 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 6 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading-light r-text-uppercase">
                                For Shoppers
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/shopper">Become a Shopper</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/shopper/hiw">How it Works</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/help">Shopper Center</nuxt-link>
                              </div>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading-light r-text-uppercase">
                                For Customers
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/customer">Join Spazamall</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/customer/membership">Spazamall +</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/help">Customer Center</nuxt-link>
                              </div>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading-light r-text-uppercase">
                                For Sellers
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/seller">Become a Seller</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/seller/hiw">How it Works</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/help">Seller Center</nuxt-link>
                              </div>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 12 }" :xs="{ span: 12}">
                          <a-row :gutter="[24,6]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading-light r-text-uppercase">
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
                                <div style="cursor:pointer;" @click="onModal('store')">
                                  Shop Directory
                                </div>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/careers">Careers</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                              <div class="r-footer-link">
                                <nuxt-link to="/contact-us">Contact Us</nuxt-link>
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
                <a-card class="r-bg-secondary">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex" class="r-footer-center-sm">
                    <a-col :lg="{ span: 4 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                <span class="r-same-height r-text-white">
                    Interested in extra money?
                </span>
                    </a-col>
                    <a-col :lg="{ span: 20 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 6 }" :sm="{ span: 6 }" :xs="{ span: 24 }">
                          <nuxt-link class="r-same-height r-footer-link" to="/shopper">
                            <a-button block
                                      class="r-btn-bordered-white"
                                      size="large"
                            >
                              Become a Shopper
                            </a-button>
                          </nuxt-link>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                          <div class="r-text-white r-same-height">
                            &copy; Spazamall 2021
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                          <div class="r-text-white r-same-height">
                            All Rights Reserved
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
                          <nuxt-link class="r-text-white" to="/privacy">
                            Privacy
                          </nuxt-link>
                          <span class="r-text-white">~</span>
                          <nuxt-link class="r-text-white r-same-height" to="/terms">Terms</nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-card>
              </div>
            </a-col>
          </a-row>
        </div>
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
