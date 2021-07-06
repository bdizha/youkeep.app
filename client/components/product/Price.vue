<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :span="24">
      <div class="gutter-box">
        <h4 class="r-product-price">
          <span class="r-text-secondary">{{ 'R' + discounted }}</span>
          <span class="r-text-primary r-text-strike">{{ 'R' + product.price }}</span>
        </h4>
        <h3 v-if="false"
            class="r-product-price"
        >
                <span class="r-price-discount text-strike">
                  {{ 'R' + product.price }}
                </span>
                <span class="r-text-primary">
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
        product: null
      }
    }
  },
  created () {
  },
  computed: {
    discounted () {
      return (parseFloat(this.product.price) + parseFloat(this.product.price / 9)).toFixed(2)
    },
    cart () {
      return this.$store.state.cart
    }
  },
  methods: {}
}
</script>
