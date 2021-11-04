<template>
  <a-button block
            size="small"
            :class="{'r-btn-secondary': hasItems, 'r-btn-primary': !hasItems}"
            type="primary"
            @click="onDrawer()"
  >
    <a-icon type="shopping" theme="filled"/>
    {{ cart.count }}
  </a-button>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-count',
  props: {},
  data () {
    return {}
  },
  computed: {
    hasItems () {
      return this.cart.count > 0
    },
    ...mapGetters({
      cart: 'cart/cart'
    })
  },
  created () {
  },
  methods: {
    onDrawer (current) {
      const drawer = {}
      drawer.isVisible = true
      drawer.current = current

      this.$store.dispatch('base/onDrawer', drawer)
    }
  }
}
</script>
