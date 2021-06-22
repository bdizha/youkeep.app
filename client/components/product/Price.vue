<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :span="24">
      <div class="gutter-box">
        <h4 class="r-product-price">
          {{ 'R' + product.price }}
        </h4>
        <h3 v-if="hasDiscount"
            class="r-product-price"
        >
                <span class="r-price-discount text-strike">
                    {{ 'R' + product.price }}
                </span>
        </h3>
      </div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-price',
  props: {
    product: { type: Object, required: false, default: null },
    isShowing: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      quantity: 1,
      modal: {
        isVisible: true,
        current: 'product',
        product: null,
      }
    }
  },
  created () {
  },
  computed: {
    hasDiscount () {
      return parseFloat(this.product.discount_percent) > 0
    },
    cart () {
      return this.$store.state.cart
    },
  },
  methods: {},
}
</script>
