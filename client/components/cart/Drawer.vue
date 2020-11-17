<template>
  <div class="r-cart-drawer">
    <r-drawer-template placement="right"
                       current="cart">
      <a-row type="flex" justify="start" align="middle">
        <a-col :span="24" class="r-cart-body">
          <template v-if="cart.count > 0">
            <div class="r-store-notice">
              <div class="r-status-update">
                <h4 class="r-heading-light r-text-secondary">
                  <a-icon type="check-circle"/>
                  You have pending items in your cart
                </h4>
                <p class="r-text-sm r-text-secondary">Items remain in your cart until the checkout is
                  completed.</p>
              </div>
            </div>
          </template>
          <r-cart-item v-for="(item, index) in cart.items"
                       :key="index+1" :item="item"></r-cart-item>
          <r-cart-empty v-if="cart.count == 0"></r-cart-empty>
          <r-cart-actions v-if="cart.count > 0"></r-cart-actions>
        </a-col>
      </a-row>
      <div class="r-cart-footer">
        <a-row :gutter="24" type="flex" justify="start" align="middle">
          <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :lg="{ span: 12 }">
            <nuxt-link to="/checkout">
              <h3 class="r-heading r-text-white">
                {{ 'R' + cart.total }}
              </h3>
            </nuxt-link>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :lg="{ span: 12 }">
            <nuxt-link to="/checkout">
              <a-button block
                        size="small"
                        type="secondary"
                        class="r-btn-bordered-accent">
                <a-icon type="shopping-cart"/>
                Checkout
              </a-button>
            </nuxt-link>
          </a-col>
        </a-row>
      </div>
    </r-drawer-template>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-drawer',
  data() {
    return {};
  },
  computed: mapGetters({
    cart: 'cart/cart',
    store: 'shop/store'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
}
</script>
