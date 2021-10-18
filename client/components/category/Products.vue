<template>
  <div :class="{'r-spin__active': $fetchState.pending}">
    <a-row
      v-if="hasProducts"
      :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" align="middle" justify="start"
      type="flex"
    >
      <a-col v-for="(product, index) in products.data" :key="index"
             :lg="{span: 24 / columns}"
             :md="{span: 24 / columns}" :sm="{span: isVertical ? 12 : 24}" :xs="{span: isVertical ? 12 : 24}"
      >
        <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             class="r-hide-lg"
      >
        <r-category-shop-now :category="category" justify="center"></r-category-shop-now>
      </a-col>
    </a-row>
  </div>
</template>
<script>

export default {
  name: 'r-category-products',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 8 },
    isVertical: { type: Boolean, required: false, default: true },
    category: { type: Object, required: false }
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
      category_id: this.category.id,
      limit: process.env.APP_LIMIT,
      filters: [],
      category_ids: []
    }

    await this.onProducts()
  },
  computed: {
    hasProducts () {
      return this.products.data.length > 0
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
