<template>
  <a-row :gutter="24" v-if='cart.count > 0' type="flex"
         justify="center">
    <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
           :lg="{ span: 12 }">
      <a-button block v-on:click="onSave()"
                size="small"
                class="r-btn-bordered-secondary">
        <a-icon type="check-circle"/>
        Save cart
      </a-button>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
           :lg="{ span: 12 }">
      <a-popconfirm
        @confirm="onClear"
        title="Are you sure you would like to clear your cart?">
        <a-icon slot="icon" type="question-circle-o" class="r-text-primary"/>
        <a-button block size="small" class="r-btn-bordered-primary">
          <a-icon type="delete"/>
          Clear cart
        </a-button>
      </a-popconfirm>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-actions',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    },
    onClear() {
      let cart = this.cart;
      cart.items = [];
      this.$store.dispatch('cart/onCart', cart);
    },

    onSave() {
      let cart = this.cart;
      this.$store.dispatch('cart/onCart', cart);
    },
  },
}
</script>
