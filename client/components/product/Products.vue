<template>
  <div :class="{'r-product-flush': isFlush()}" class="">
    <a-row v-if="hasProducts" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]"
           align="middle" justify="start"
           type="flex"
    >
      <a-col v-for="(product, index) in products.data" :key="index"
             :lg="{span: 24 / columns}"
             :md="{span: 24 / columns}" :sm="{span: isVertical ? 12 : 24}" :xs="{span: isVertical ? 12 : 24}"
      >
        <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
      </a-col>
    </a-row>
  </div>
</template>
<script>

export default {
  name: 'r-product-products',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    isVertical: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false, default: null },
    type: { type: Number, required: false, default: 1 },
  },
  data () {
    return {
      payload: {},
      products: {
        data: []
      }
    }
  },
  async fetch () {
    this.payload = {
      product_id: this.product.id,
      type: this.type,
      limit: process.env.APP_LIMIT,
      filters: []
    }

    await this.onProducts()
  },
  computed: {
    hasProducts () {
      return this.products.data != undefined && this.products.data.length > 0
    }
  },
  methods: {
    async onProducts () {
      this.products = await this.$store.dispatch('shop/onProducts', this.payload)
    },
    isFlush () {
      return Math.floor(Math.random() * Math.floor(2))
    }
  }
}
</script>
