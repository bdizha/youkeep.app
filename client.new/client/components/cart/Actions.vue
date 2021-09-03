<template>
  <a-row v-if="cart.count > 0" :gutter="24" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <a-button block class="r-btn-bordered-secondary"
                size="small"
                v-on:click="onSave()"
      >
        <a-icon type="check-circle"/>
        Save cart
      </a-button>
    </a-col>
    <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <a-popconfirm
        title="Are you sure you would like to clear your cart?"
        @confirm="onClear"
      >
        <a-icon slot="icon" class="r-text-secondary" type="question-circle-o"/>
        <a-button block class="r-btn-bordered-primary" size="large">
          <a-icon type="delete"/>
          Clear all
        </a-button>
      </a-popconfirm>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-actions',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    },
    onClear () {
      let cart = JSON.parse(JSON.stringify(this.cart))

      cart.items = []
      this.$store.dispatch('cart/onCart', cart)
    },

    onSave () {
      let cart = this.cart
      this.$store.dispatch('cart/onCart', cart)
    },
  },
}
</script>
