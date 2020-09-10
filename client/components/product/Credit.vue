<template>
  <div class="r-credit">
    <template v-if="hasDiscount">
      <div class="r-credit-text">SAVE</div>
      <div class="r-credit-discount">{{ product.discount_percent }}%</div>
    </template>
    <template v-if="!hasDiscount && product.is_great_value">
      <div class="r-credit-text">GREAT</div>
      <div class="r-credit-discount">Value</div>
    </template>
  </div>
</template>
<script>
export default {
  name: 'r-product-credit',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
      quantity: 1,
    };
  },
  created() {
  },
  computed: {
    hasDiscount() {
      return parseInt(this.product.discount_percent) > 0;
    }
  },
  methods: {},
};
</script>
