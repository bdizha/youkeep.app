<template>
  <a-modal v-model="modal.isVisible"
           :after-close="onClose"
           :class="'r-modal-' + modal.current"
           :closable="modal.isClosable"
           :mask-closable="false"
           :width="width"
  >
    <template v-if="modal.hasTitle && false" slot="title">
      <h4 class="r-heading">
        <a-icon type="left"></a-icon>
        {{ modal.title }}
      </h4>
    </template>
    <template slot="footer">
      <a-row align="middle" justify="center" type="flex">
        <a-col :span="24">
          <h4 class="r-heading r-text-primary r-text-center">
            <a-icon type="gift"/>
            <span>FREE Deliveries For 1 Week with Spazastop <br></span>
          </h4>
        </a-col>
      </a-row>
    </template>
    <r-category-modal v-if="isCurrent('category')"
                      key="category" class="r-animate"
    ></r-category-modal>
    <r-store-modal v-if="isCurrent('store')"
                   key="store" class="r-animate"
    ></r-store-modal>
    <r-shopper-modal v-if="isCurrent('shopper')"
                     key="shopper" class="r-animate"
    ></r-shopper-modal>
    <r-secure v-if="isCurrent('secure')"
              key="secure" class="r-animate"
    ></r-secure>
    <r-login v-if="isCurrent('login')"
             key="login" class="r-animate"
    ></r-login>
    <r-verify v-if="isCurrent('verify')"
              key="verify" class="r-animate"></r-verify>
    <r-register v-if="isCurrent('register')"
                key="register" class="r-animate"
    ></r-register>
    <r-password-request v-if="isCurrent('password-request')"
                        key="password-request" class="r-animate"
    ></r-password-request>
    <r-password-reset v-if="isCurrent('password-reset')"
                      key="password-reset" class="r-animate"
    ></r-password-reset>
    <r-product-modal v-if="isCurrent('product')" class="r-animate"></r-product-modal>
    <r-product-modal-wishlist v-if="isCurrent('wishlist')"
                              key="wish" class="r-animate"
    ></r-product-modal-wishlist>
    <r-product-modal-timeline v-if="isCurrent('timeline')"
                              key="timelinme" class="r-animate"
    ></r-product-modal-timeline>
    <r-delivery-modal v-if="isCurrent('delivery')"
                      key="delivery" class="r-animate"
    ></r-delivery-modal>
    <r-account-modal-profile v-if="isCurrent('account-profile')"
                             key="account-profile" class="r-animate"
    ></r-account-modal-profile>
    <r-account-modal-password v-if="isCurrent('account-password')"
                              key="account-password" class="r-animate"
    ></r-account-modal-password>
    <r-account-modal-card v-if="isCurrent('account-card')"
                          key="account-card" class="r-animate"
    ></r-account-modal-card>
    <r-account-modal-address v-if="isCurrent('account-address')"
                             key="account-address" class="r-animate"
    ></r-account-modal-address>
    <r-account-modal-credit v-if="isCurrent('account-credit')"
                            key="account-credit" class="r-animate"
    ></r-account-modal-credit>
    <r-account-modal-promo v-if="isCurrent('account-promo')"
                           key="account-promo" class="r-animate"
    ></r-account-modal-promo>
    <r-account-modal-products v-if="isCurrent('account-products')"
                              key="account-products" class="r-animate"
    ></r-account-modal-products>
    <r-account-modal-sellers v-if="isCurrent('account-sellers')"
                            key="account-sellers" class="r-animate"
    ></r-account-modal-sellers>
    <r-store-gallery v-if="isCurrent('store-gallery')"
                     key="store-gallery"
    ></r-store-gallery>
    <r-store-catalog-map v-if="isCurrent('store-catalog-map')"
                         key="store-catalog-map"
    ></r-store-catalog-map>
  </a-modal>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-modal',
  props: {
    hasFooter: { type: Boolean, required: false, default: false },
    maskClosable: { type: Boolean, required: false, default: true },
    closable: { type: Boolean, required: false, default: false },
    current: { type: String, required: false, default: null },
    width: { type: Number, required: false, default: 520 },
    cssClass: { type: String, required: false, default: null },
    redirectTo: { type: String, required: false, default: null }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    isCurrent (current) {
      return this.modal.current === current
    },
    payload () {
    },
    onClose () {
      const modal = {}
      modal.isVisible = false
      modal.isClosable = false
      modal.current = null

      console.log('closing off this modal')

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
