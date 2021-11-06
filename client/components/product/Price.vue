<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :span="24">
      <p v-if="isShowing" class="r-text-xs r-text-light">
        Current price
      </p>
      <p class="r-item-text r-text-white">
        <nuxt-img v-if="!isDollar() && product.currency_url"
                  :src="product.currency_url"
                  width="18px"
        ></nuxt-img>
        <span>{{ (isDollar() ? '$' : '') +  product.price }}</span>
        <span>{{ product.currency }}</span>
      </p>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-price',
  props: {
    product: {
      type: Object,
      required: true,
      default: () => {
        return { currency: null, price: 0, currency_url: null }
      }
    },
    isShowing: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {
    isDollar () {
      return this.product.currency === 'USD'
    }
  }
}
</script>
