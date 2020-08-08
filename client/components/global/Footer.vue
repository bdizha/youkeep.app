<template>
  <a-row type="flex" justify="center">
    <a-col class="gutter-row" :span="24">
      <a-row type="flex" justify="center" class="r-bg-secondary-light">
        <a-col v-if="hasSubscribe" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <r-subscribe size="24"></r-subscribe>
        </a-col>
        <a-col v-if="hasDownload" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <r-download size="24"></r-download>
        </a-col>
      </a-row>
      <a-layout-footer v-if="hasFooter">
        <a-row type="flex" justify="center" class="r-bg-white r-margin-vertical-24">
          <a-col class="r-padding-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row type="flex" justify="start">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 6 }">
                <a-card title="It's shopping time" :bordered="false" style="width: 100%;">
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <router-link class="r-same-height" to="/">
                        <img src="/assets/icon_footer.svg?v=1"
                             alt="Kshopit - Online shop"
                             class="r-footer-logo /">
                      </router-link>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 18 }" :sm="{ span: 16 }" :lg="{ span: 16 }">
                      <router-link :to="$route.path" @click.native="onModal('delivery')"
                                   class="r-footer-link r-padding-top-24">
                        Enter delivery address
                      </router-link>
                    </a-col>
                  </a-row>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 18 }">
                <a-row :gutter="[24,24]" type="flex" justify="start">
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Shoppers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <router-link to="/shopper">Become a shopper</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/kpaise">Kpaise - Shopper</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/help">Help center</router-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Customers" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <router-link to="/login">Join Kshopit</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/kpaise">Kpaise - Customer</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/hiw">How it works</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/help">Help center</router-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Merchants" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <router-link to="/merchant">Become a merchant</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/kpaise">Kpaise - Business</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/resources">Resources</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/help">Merchant center</router-link>
                      </div>
                    </a-card>
                  </a-col>
                  <a-col :xs="{ span: 12}" :md="{ span: 12 }" :lg="{ span: 6 }">
                    <a-card title="Company" :bordered="false" style="width: 100%;">
                      <div class="r-footer-link">
                        <router-link to="/about-us">About us</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/" @click.native="onModal('store')">
                          Shop directory
                        </router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/careers">Careers</router-link>
                      </div>
                      <div class="r-footer-link">
                        <router-link to="/contact-us">Contact us</router-link>
                      </div>
                    </a-card>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" class="r-bg-dark">
          <a-col class="r-padding-24 r-footer-center-sm" :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :lg="{ span: 18 }">
            <a-row :gutter="[24,24]" type="flex" justify="start">
              <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                                <span class="r-same-height r-text-white">
                                    Interested in making extra money?
                                </span>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 16 }">
                <a-row :gutter="[24,24]" type="flex" justify="start">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 8 }">
                    <router-link class="r-same-height r-footer-link" to="/shopper">
                      <a-button block class="r-btn-bordered-white" size="default">
                        Become a shopper
                      </a-button>
                    </router-link>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                    <div class="r-text-white r-same-height r-footer-link">
                      &copy; Kshopit 2020 All Rights Reserved
                    </div>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 8 }">
                    <router-link class="r-text-white r-same-height r-footer-link" to="/privacy">
                      Privacy
                    </router-link>
                    <span>|</span>
                    <router-link class="r-text-white r-same-height" to="/terms">Terms</router-link>
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
