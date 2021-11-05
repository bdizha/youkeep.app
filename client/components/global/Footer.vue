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
      <a-row justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-dark r-border-none r-footer-center-sm">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" justify="center" type="flex">
                <a-col v-if="!isRaised" :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[96,96]" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <nuxt-link to="/">
                                <img alt="Youkeep - B2B marketplace for sellers and shoppers in Africa."
                                     class="r-footer-logo /"
                                     src="/images/logo_white.svg"
                                >
                              </nuxt-link>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-normal">
                                On-demand NFTs experience.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :xs="{ span: 24}">
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <h4 class="r-heading-light r-text-uppercase">
                                    Marketplace
                                  </h4>
                                </a-col>
                                <a-col v-for="(serve, index) in serves"
                                       :key="index"
                                       :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}"
                                >
                                  <div class="r-footer-link">
                                    <nuxt-link :to="`/category/${serve.slug}`">
                                      {{ serve.name }}
                                    </nuxt-link>
                                  </div>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :xs="{ span: 24}">
                              <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <h4 class="r-heading-light r-text-uppercase">
                                        Who we serve
                                      </h4>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/customer">Collectors</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/artist">Artists</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/seller">Sellers</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/partners">Partners</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/community">Community</nuxt-link>
                                      </div>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <h4 class="r-heading-light r-text-uppercase">
                                        Resources
                                      </h4>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/blog">Resources</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/documentation">API Docs</nuxt-link>
                                      </div>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                      <div class="r-footer-link">
                                        <nuxt-link to="/welcome">Get to know Youkeep?</nuxt-link>
                                      </div>
                                    </a-col>
                                  </a-row>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :xs="{ span: 24}">
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <h4 class="r-heading-light r-text-uppercase">
                                    Products
                                  </h4>
                                </a-col>
                                <a-col v-for="(service, index) in products"
                                       :key="index"
                                       :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}"
                                >
                                  <div class="r-footer-link">
                                    <nuxt-link :to="'/service/' + service.slug" v-html="service.title"></nuxt-link>
                                  </div>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <div class="r-footer-link">
                                    <nuxt-link to="/help"><span class="r-text-primary">Learn</span> with Youkeep
                                    </nuxt-link>
                                  </div>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
                                  <div class="r-footer-link">
                                    <nuxt-link to="/pricing"><span class="r-text-primary">Transact</span> with Youkeep
                                    </nuxt-link>
                                  </div>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :xs="{ span: 24}">
                              <a-row :gutter="[24,12]" align="top" justify="start" type="flex">
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
                                    <nuxt-link to="/careers">Work with us</nuxt-link>
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
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                          <p class="r-footer-text">
                            &copy; Youkeep 2021
                          </p>
                        </a-col>
                        <a-col class="r-text-left" :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                              <p class="r-footer-text">
                                All Rights Reserved
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                              <div class="r-footer-link">
                                <nuxt-link to="/terms">Terms of Use</nuxt-link>
                                •
                                <nuxt-link to="/privacy">Privacy Policy</nuxt-link>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                              <nuxt-link class="r-footer-link" to="/contact-us">
                                <a-button block
                                          class="r-btn-bordered-secondary"
                                          size="large"
                                >
                                  Contact Us
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
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
    serves: 'content/serves',
    hasDownload: 'base/hasDownload',
    hasSubscribe: 'base/hasSubscribe',
    hasFooter: 'base/hasFooter',
    isRaised: 'base/isRaised',
    products: 'content/products'
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
