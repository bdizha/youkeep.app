<template>
  <div class="r-cart-drawer">
    <r-drawer-template current="cart"
                       placement="right"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col :span="24" class="r-cart-body">
          <template v-if="cart.count > 0">
            <a-row align="middle" justify="start" type="flex">
              <a-col :span="24">
                <div class="r-bg-primary-light r-p-24" style="margin: -24px -24px 24px;">
                  <h4 class="r-heading-light r-text-primary">
                    <a-icon type="check-circle"/>
                    You've pending items in your cart
                  </h4>
                  <p class="r-text-sm r-text-secondary">Items remain in your cart until the checkout is
                    completed.</p>
                </div>
              </a-col>
            </a-row>
          </template>
          <r-cart-item v-for="(item, index) in cart.items"
                       :key="index+1" :item="item"
          ></r-cart-item>
          <r-cart-empty v-if="cart.count == 0"></r-cart-empty>
          <r-cart-actions v-if="cart.count > 0"></r-cart-actions>
        </a-col>
      </a-row>
    </r-drawer-template>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-drawer',
  data () {
    return {}
  },
  computed: mapGetters({
    cart: 'cart/cart',
    store: 'base/store'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
