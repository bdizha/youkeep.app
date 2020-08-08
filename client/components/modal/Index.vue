<template>
  <a-modal :class="'r-modal-' + modal.current"
           :mask-closable="modal.isClosable"
           :after-close="onClose"
           :closable="modal.isClosable"
           v-model="modal.isVisible">
    <template slot="footer">
      <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row" :span="24">
          <h4 class="r-heading r-text-primary r-text-center">
            <a-icon type="gift"/>
            <span>FREE Deliveries For 1 Week with Kshopit <br></span>
          </h4>
        </a-col>
      </a-row>
    </template>
    <r-category-modal v-if="isCurrent('category')"
                      v-bind:key="'category'" class="fade-item"></r-category-modal>
    <r-store-modal v-if="isCurrent('store')"
                   v-bind:key="'store'" class="fade-item"></r-store-modal>
    <r-secure v-if="isCurrent('secure')"
              v-bind:key="'secure'" class="fade-item"></r-secure>
    <r-login v-if="isCurrent('login')"
             v-bind:key="'login'" class="fade-item"></r-login>
    <r-register v-if="isCurrent('register')"
                v-bind:key="'register'" class="fade-item"></r-register>
    <r-password-request v-if="isCurrent('password-request')"
                        v-bind:key="'password-request'" class="fade-item"></r-password-request>
    <r-password-reset v-if="isCurrent('password-reset')"
                      v-bind:key="'password-reset'" class="fade-item"></r-password-reset>
    <r-product-modal v-if="isCurrent('product')"
                     v-bind:key="'product'" class="fade-item"></r-product-modal>
    <r-product-modal-wishlist v-if="isCurrent('wishlist')"
                              v-bind:key="'wish'" class="fade-item"></r-product-modal-wishlist>
    <r-product-modal-timeline v-if="isCurrent('timeline')"
                              v-bind:key="'timelinme'" class="fade-item"></r-product-modal-timeline>
    <r-delivery-modal v-if="isCurrent('delivery')"
                      v-bind:key="'delivery'" class="fade-item"></r-delivery-modal>
    <r-account-modal-profile v-if="isCurrent('account-profile')"
                             v-bind:key="'account-profile'" class="fade-item"></r-account-modal-profile>
    <r-account-modal-password v-if="isCurrent('account-password')"
                              v-bind:key="'account-password'" class="fade-item"></r-account-modal-password>
    <r-account-modal-card v-if="isCurrent('account-card')"
                          v-bind:key="'account-card'" class="fade-item"></r-account-modal-card>
    <r-account-modal-address v-if="isCurrent('account-address')"
                             v-bind:key="'account-address'" class="fade-item"></r-account-modal-address>
    <r-account-modal-credit v-if="isCurrent('account-credit')"
                            v-bind:key="'account-credit'" class="fade-item"></r-account-modal-credit>
    <r-account-modal-promo v-if="isCurrent('account-promo')"
                           v-bind:key="'account-promo'" class="fade-item"></r-account-modal-promo>
    <r-account-modal-products v-if="isCurrent('account-products')"
                              v-bind:key="'account-products'" class="fade-item"></r-account-modal-products>
    <r-account-modal-stores v-if="isCurrent('account-stores')"
                            v-bind:key="'account-stores'" class="fade-item"></r-account-modal-stores>
  </a-modal>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-modal',
  props: {
    hasFooter: {type: Boolean, required: false, default: false},
    maskClosable: {type: Boolean, required: false, default: true},
    closable: {type: Boolean, required: false, default: false},
    current: {type: String, required: false, default: null},
    cssClass: {type: String, required: false, default: null},
    redirectTo: {type: String, required: false, default: null},
  },
  data() {
    return {};
  },
  created() {
    this.payload();
  },
  computed: mapGetters({
    modal: 'base/modal',
  }),
  methods: {
    isCurrent(current) {
      return this.modal.current === current;
    },
    payload() {
      let $this = this;
    },
    async onClose(event) {
      let modal = {};
      modal.isVisible = false;
      modal.current = null;

      await this.$store.dispatch('base/onModal', modal);
    }
  },
};
</script>