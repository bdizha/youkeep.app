<template>
  <div :class="{'r-spin__active': $fetchState.pending}" class="r-product-cards">
    <a-row
      v-if="hasProducts"
      :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex" justify="start"
      align="middle"
    >
      <a-col v-for="(product, index) in products.data" :key="index"
             :xs="{span: isVertical ? 12 : 24}"
             :sm="{span: isVertical ? 12 : 24}" :md="{span: 24 / columns}" :lg="{span: 24 / columns}"
      >
        <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
      </a-col>
      <a-col class="r-hide-lg" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }"
      >
        <r-category-shop-now :category="category" justify="center"></r-category-shop-now>
      </a-col>
    </a-row>
    <r-spinner :is-absolute="true"></r-spinner>
  </div>
</template>
<script>
import axios from 'axios'
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-products',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    isVertical: { type: Boolean, required: false, default: true },
    category: { type: Object, required: false },
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
      filters: []
    }

    await this.onProducts()
  },
  computed: {
    hasProducts () {
      return this.products.data.length > 0
    },
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

