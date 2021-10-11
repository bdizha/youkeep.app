<template>
  <div :class="{'r-cart__active': cart.count > 0}"
       class="r-cart"
       @click="onDrawer('cart')"
  >
    <div class="r-cart-icon"></div>
    <span class="r-cart-count">{{ cart.count }}</span>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-count',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created () {
  },
  methods: {
    onDrawer (current) {
      const drawer = {}
      drawer.isVisible = true
      drawer.current = current

      this.$store.dispatch('base/onDrawer', drawer)
    },
  },
}
</script>
