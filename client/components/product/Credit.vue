<template>
  <a-row type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-credit">
        <template v-if="!product.is_great_value">
          <div class="r-credit-discount">-{{ product.discount_percent }}%</div>
        </template>
        <template v-else>
          <div class="r-credit-discount">-{{ product.discount_percent }}%</div>
        </template>
      </div>
    </a-col>
  </a-row>
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
