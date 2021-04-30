<template>
  <div class="r-cart-footer" :class="{'r-cart-footer__empty': cart.total > 0}">
    <a-row v-if="cart.total > 0" :gutter="24" type="flex" justify="start" align="middle">
      <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
             :lg="{ span: 12 }">
        <NuxtLink  :prefetch="true" to="/checkout">
          <h4 class="r-heading r-text-white">
            {{ 'R' + cart.total }}
          </h4>
        </NuxtLink>
      </a-col>
      <a-col class="r-text-right" :xs="{ span: 12 }" :sm="{ span: 12 }"
             :lg="{ span: 12 }">
        <NuxtLink  :prefetch="true" to="/checkout">
          <a-button block
                    size="default"
                    type="secondary"
                    class="r-cart-btn">
            <a-icon type="shopping-cart"/>
            Checkout
          </a-button>
        </NuxtLink>
      </a-col>
    </a-row>
    <a-row v-if="cart.total == 0" type="flex" justify="start" align="middle">
      <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :lg="{ span: 24 }">
        <NuxtLink  :prefetch="true" to="/">
          <a-button block
                    size="default"
                    type="secondary"
                    class="r-cart-btn">
            <a-icon type="shopping-cart"/>
            Shop now
          </a-button>
        </NuxtLink>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-footer',
  data() {
    return {};
  },
  computed: mapGetters({
    cart: 'cart/cart',
    store: 'base/store'
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
