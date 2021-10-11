<template>
  <div :class="{'r-cart-footer__empty': cart.total > 0}" class="r-cart-footer">
    <a-row v-if="cart.total > 0" :gutter="[24, 24]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
             class="r-text-left"
      >
        <nuxt-link to="/checkout">
          <h4 class="r-heading r-text-white">
            {{ 'R' + cart.total }}
          </h4>
        </nuxt-link>
      </a-col>
      <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
             class="r-text-right"
      >
        <nuxt-link to="/checkout">
          <a-button block
                    class="r-cart-btn"
                    size="large"
                    type="secondary"
          >
            <a-icon type="cart-icon"/>
            Checkout
          </a-button>
        </nuxt-link>
      </a-col>
    </a-row>
    <a-row v-if="cart.total == 0" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             class="r-text-center"
      >
        <nuxt-link to="/">
          <a-button block
                    class="r-cart-btn"
                    size="large"
                    type="secondary"
          >
            <a-icon type="cart-icon"/>
            Shop now
          </a-button>
        </nuxt-link>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-footer',
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
