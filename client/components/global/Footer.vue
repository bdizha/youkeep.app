<template>
  <a-row class="r-mt-48" type="flex" justify="center">
    <a-col :span="24">
      <a-row v-if="hasDownload && false" class="r-mb-24" type="flex" justify="center">
        <a-col v-if="hasDownload && false" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-shop-now></r-shop-now>
        </a-col>
        <a-col v-if="hasSubscribe && false" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-subscribe></r-subscribe>
        </a-col>
      </a-row>
      <a-layout-footer v-if="hasFooter">
        <a-row type="flex" justify="center">
          <a-col v-if="false" style="background: url(/images/content/11.png) no-repeat;background-size: cover;"
                 class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 24 }"
                 :lg="{ span: 24 }"
          >
            <div style="padding-bottom: 300px;"></div>
          </a-col>
          <a-col class="r-ph-24 r-pv-48" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row type="flex" justify="start" align="top">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 4 }">
                <a-row type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <nuxt-link class="r-text-center" to="/">
                      <img src="/images/icon-06.svg?v=1"
                           alt="Shopple - Online shop"
                           class="r-footer-logo /"
                      >
                    </nuxt-link>
                  </a-col>
                </a-row>
                <a-row type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 18 }" :sm="{ span: 16 }" :lg="{ span: 16 }">
                    <nuxt-link :to="$route.path" @click.native="onModal('delivery')"
                               class="r-footer-link r-pt-24"
                    >
                      Enter delivery address
                    </nuxt-link>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 20 }">
                <a-row :gutter="[24,6]" type="flex" justify="start" align="top">
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-row :gutter="[24,6]" type="flex" justify="start" align="top">
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading r-text-uppercase">
                          For Shoppers
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/shopper">Become a Shopper</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/shopper/hiw">How it Works</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/help">Shopper Center</nuxt-link>
                        </div>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-row :gutter="[24,6]" type="flex" justify="start" align="top">
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading r-text-uppercase">
                          For Customers
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/customer">Join Shopple</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/customer/hiw">How it Works</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/help">Customer Center</nuxt-link>
                        </div>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-row :gutter="[24,6]" type="flex" justify="start" align="top">
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading r-text-uppercase">
                          For Merchants
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/merchant">Become a Merchant</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/merchant/hiw">How it Works</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/help">Merchant Center</nuxt-link>
                        </div>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-row :gutter="[24,6]" type="flex" justify="start" align="top">
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading r-text-uppercase">
                          Company
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/about-us">About Us</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <div style="cursor:pointer;" @click="onModal('store')">
                            Shop Directory
                          </div>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
                        <div class="r-footer-link">
                          <nuxt-link to="/careers">Careers</nuxt-link>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24}" :md="{ span: 24 }" :lg="{ span: 24 }">
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
        <a-row type="flex" justify="center" align="middle" class="r-bg-dark">
          <a-col class="r-p-24 r-footer-center-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[24,6]" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 4 }">
                <span class="r-same-height r-text-white">
                    Interested in making extra money?
                </span>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 20 }">
                <a-row :gutter="[24,6]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 6 }" :lg="{ span: 6 }">
                    <nuxt-link class="r-same-height r-footer-link" to="/shopper">
                      <a-button block
                                class="r-btn-bordered-secondary"
                                size="large"
                      >
                        Become a Shopper
                      </a-button>
                    </nuxt-link>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <div class="r-text-white r-same-height">
                      &copy; Shopple 2021
                    </div>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <div class="r-text-white r-same-height">
                      All Rights Reserved
                    </div>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <nuxt-link class="r-text-white" to="/privacy">
                      Privacy
                    </nuxt-link>
                    <span class="r-text-white">~</span>
                    <nuxt-link class="r-text-white r-same-height" to="/terms">Terms</nuxt-link>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
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
  data () {
    return {}
  },
  computed: mapGetters({
    hasDownload: 'base/hasDownload',
    hasSubscribe: 'base/hasSubscribe',
    hasFooter: 'base/hasFooter',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal (current) {
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      console.log('modal', modal)

      this.$store.dispatch('base/onModal', modal)
    },
  },
}
</script>
