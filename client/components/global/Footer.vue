<template>
  <a-row type="flex" justify="center">
    <a-col :span="24">
      <a-row class="r-mb-24" type="flex" justify="center">
        <a-col class="r-ph-24-lg" :xs="{ span: 24 }" :sm="{ span: 21 }" :lg="{ span: 21 }">
          <a-row :gutter="[24,24]" type="flex" justify="center"
                 align="middle">
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
            <a-row type="flex" justify="start" align="top">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 6 }">
                <a-card title="It's shopping time" :bordered="false" style="width: 100%;">
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <NuxtLink  :prefetch="true" class="r-text-center" to="/">
                        <img src="/images/icon-06.svg?v=1"
                             alt="Shopple - Online shop"
                             class="r-footer-logo /">
                      </NuxtLink>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 18 }" :sm="{ span: 16 }" :lg="{ span: 16 }">
                      <NuxtLink  :prefetch="true" :to="$route.path" @click.native="onModal('delivery')"
                                 class="r-footer-link r-pt-24">
                        Enter delivery address
                      </NuxtLink>
                    </a-col>
                  </a-row>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 18 }">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Shoppers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/shopper">Become a shopper</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/shopper/paise">Paise for shoppers</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/help">Help center</NuxtLink>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Customers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/customer">Join Shopple</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/customer/paise">Paise for customers</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/hiw">How it works</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/help">Help center</NuxtLink>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Merchants" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/merchant">Become a merchant</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/merchant/paise">Paise for businesses</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/merchant/resources">Resources</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/help">Merchant center</NuxtLink>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Company" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/about-us">About us</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/stores/its-shopping-time" @click.native="onModal('store')">
                          Shop directory
                        </NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/careers">Careers</NuxtLink>
                      </div>
                      <div class="r-footer-link">
                        <NuxtLink  :prefetch="true" to="/contact-us">Contact us</NuxtLink>
                      </div>
                    </a-card>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle" class="r-bg-dark">
          <a-col class="r-p-24 r-footer-center-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 6 }">
                                <span class="r-same-height r-text-white">
                                    Interested in making extra money?
                                </span>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 18 }">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 6 }" :lg="{ span: 6 }">
                    <NuxtLink  :prefetch="true" class="r-same-height r-footer-link" to="/shopper">
                      <a-button block class="r-btn-bordered-white" size="default">
                        Become a shopper
                      </a-button>
                    </NuxtLink>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <div class="r-text-white r-same-height">
                      &copy; Shopple 2020
                    </div>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <div class="r-text-white r-same-height">
                      All Rights Reserved
                    </div>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <NuxtLink  :prefetch="true" class="r-text-white" to="/privacy">
                      Privacy
                    </NuxtLink>
                    <span class="r-text-white">~</span>
                    <NuxtLink  :prefetch="true" class="r-text-white r-same-height" to="/terms">Terms</NuxtLink>
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
