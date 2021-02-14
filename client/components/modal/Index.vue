<template>
  <a-modal :class="'r-modal-' + modal.current"
           :mask-closable="false"
           :after-close="onClose"
           :closable="modal.isClosable"
           v-model="modal.isVisible">
    <template slot="footer">
      <a-row type="flex" justify="center" align="middle">
        <a-col :span="24">
          <h4 class="r-heading r-text-secondary r-text-center">
            <a-icon type="gift"/>
            <span>FREE Deliveries For 1 Week with Shopple <br></span>
          </h4>
        </a-col>
      </a-row>
    </template>
    <r-category-modal v-if="isCurrent('category')"
                      v-bind:key="'category'" class="r-animate"></r-category-modal>
    <r-store-modal v-if="isCurrent('store')"
                   v-bind:key="'store'" class="r-animate"></r-store-modal>
    <r-shopper-modal v-if="isCurrent('shopper')"
                     v-bind:key="'shopper'" class="r-animate"></r-shopper-modal>
    <r-secure v-if="isCurrent('secure')"
              v-bind:key="'secure'" class="r-animate"></r-secure>
    <r-login v-if="isCurrent('login')"
             v-bind:key="'login'" class="r-animate"></r-login>
    <r-register v-if="isCurrent('register')"
                v-bind:key="'register'" class="r-animate"></r-register>
    <r-password-request v-if="isCurrent('password-request')"
                        v-bind:key="'password-request'" class="r-animate"></r-password-request>
    <r-password-reset v-if="isCurrent('password-reset')"
                      v-bind:key="'password-reset'" class="r-animate"></r-password-reset>
    <r-product-modal v-if="isCurrent('product')"  class="r-animate"></r-product-modal>
    <r-product-modal-wishlist v-if="isCurrent('wishlist')"
                              v-bind:key="'wish'" class="r-animate"></r-product-modal-wishlist>
    <r-product-modal-timeline v-if="isCurrent('timeline')"
                              v-bind:key="'timelinme'" class="r-animate"></r-product-modal-timeline>
    <r-delivery-modal v-if="isCurrent('delivery')"
                      v-bind:key="'delivery'" class="r-animate"></r-delivery-modal>
    <r-account-modal-profile v-if="isCurrent('account-profile')"
                             v-bind:key="'account-profile'" class="r-animate"></r-account-modal-profile>
    <r-account-modal-password v-if="isCurrent('account-password')"
                              v-bind:key="'account-password'" class="r-animate"></r-account-modal-password>
    <r-account-modal-card v-if="isCurrent('account-card')"
                          v-bind:key="'account-card'" class="r-animate"></r-account-modal-card>
    <r-account-modal-address v-if="isCurrent('account-address')"
                             v-bind:key="'account-address'" class="r-animate"></r-account-modal-address>
    <r-account-modal-credit v-if="isCurrent('account-credit')"
                            v-bind:key="'account-credit'" class="r-animate"></r-account-modal-credit>
    <r-account-modal-promo v-if="isCurrent('account-promo')"
                           v-bind:key="'account-promo'" class="r-animate"></r-account-modal-promo>
    <r-account-modal-products v-if="isCurrent('account-products')"
                              v-bind:key="'account-products'" class="r-animate"></r-account-modal-products>
    <r-account-modal-stores v-if="isCurrent('account-stores')"
                            v-bind:key="'account-stores'" class="r-animate"></r-account-modal-stores>
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
    onClose() {
      let modal = {};
      modal.isVisible = false;
      modal.isClosable = false;
      modal.current = null;

      console.log('closing off this modal');

      this.$store.dispatch('base/onModal', modal);
    }
  },
};
</script>
