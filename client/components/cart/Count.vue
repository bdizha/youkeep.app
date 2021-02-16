<template>
  <div @click="onDrawer('cart')"
       class="r-cart"
       :class="{'r-cart__active': cart.count > 0}">
    <div class="r-shopping-cart"></div>
    <span class="r-cart-count">{{ cart.count }}</span>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-count',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created() {
  },
  methods: {
    onDrawer(current) {
      let drawer = {};
      drawer.isVisible = true;
      drawer.current = current;

      this.$store.dispatch('base/onDrawer', drawer);
    },
  },
}
</script>
