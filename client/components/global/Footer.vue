<template>
  <a-row type="flex" justify="center">
    <a-col :span="24">
      <a-row class="r-mb-48" type="flex" justify="center">
        <a-col :xs="{ span: 24 }" :sm="{ span: 21 }" :lg="{ span: 21 }">
          <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
            <a-col v-if="hasSubscribe" :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
              <r-subscribe></r-subscribe>
            </a-col>
            <a-col v-if="hasDownload" :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
              <r-shop-now></r-shop-now>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-layout-footer v-if="hasFooter">
        <a-row class="r-bg-white r-mv-24" type="flex" justify="center">
          <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row type="flex" justify="start">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 6 }">
                <a-card title="It's shopping time" :bordered="false" style="width: 100%;">
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <nuxt-link class="r-same-height" to="/">
                        <img src="/images/icon-06.svg?v=1"
                             alt="Shopple - Online shop"
                             class="r-footer-logo /">
                      </nuxt-link>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 18 }" :sm="{ span: 16 }" :lg="{ span: 16 }">
                      <nuxt-link :to="$route.path" @click.native="onModal('delivery')"
                                 class="r-footer-link r-pt-24">
                        Enter delivery address
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 18 }">
                <a-row :gutter="[24,24]" type="flex" justify="start">
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Shoppers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <nuxt-link to="/shopper">Become a shopper</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/shopper/paise">Paise for shoppers</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/help">Help center</nuxt-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Customers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <nuxt-link to="/customer">Join Shopple</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/customer/paise">Paise for customers</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/hiw">How it works</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/help">Help center</nuxt-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Merchants" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <nuxt-link to="/merchant">Become a merchant</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/merchant/paise">Paise for businesses</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/merchant/resources">Resources</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/help">Merchant center</nuxt-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Company" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <nuxt-link to="/about-us">About us</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/stores/its-shopping-time" @click.native="onModal('store')">
                          Shop directory
                        </nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/careers">Careers</nuxt-link>
                      </div>
                      <div class="r-footer-link">
                        <nuxt-link to="/contact-us">Contact us</nuxt-link>
                      </div>
                    </a-card>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" class="r-bg-dark">
          <a-col class="r-p-24 r-footer-center-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[24,24]" type="flex" justify="start">
              <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                                <span class="r-same-height r-text-white">
                                    Interested in making extra money?
                                </span>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 16 }">
                <a-row :gutter="[24,24]" type="flex" justify="start">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 8 }">
                    <nuxt-link class="r-same-height r-footer-link" to="/shopper">
                      <a-button block class="r-btn-bordered-white" size="default">
                        Become a shopper
                      </a-button>
                    </nuxt-link>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                    <div class="r-text-white r-same-height r-footer-link">
                      &copy; Shopple 2020 All Rights Reserved
                    </div>
                  </a-col>
                  <a-col class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                    <nuxt-link class="r-text-white r-same-height r-footer-link" to="/privacy">
                      Privacy
                    </nuxt-link>
                    <span>|</span>
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
import {mapGetters} from "vuex";

export default {
  name: 'r-footer',
  data() {
    return {};
  },
  computed: mapGetters({
    hasDownload: 'base/hasDownload',
    hasSubscribe: 'base/hasSubscribe',
    hasFooter: 'base/hasFooter',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      console.log('modal', modal);

      this.$store.dispatch('base/onModal', modal);
    },
  },
};
</script>
