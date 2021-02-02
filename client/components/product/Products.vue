<template>
  <div class="r-product-cards" :class="{'r-product-flush': isFlush()}">
    <a-row v-if="hasProducts" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, 24]" type="flex" justify="start"
           align="middle">
      <a-col v-for="(product, index) in products.data" :key="index"
             :xs="{span: isVertical ? 12 : 24}"
             :sm="{span: isVertical ? 12 : 24}" :md="{span: 24 / columns}" :lg="{span: 24 / columns}">
        <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
      </a-col>
      <a-col class="r-hide-lg" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <r-category-shop-now :category="category" justify="center"></r-category-shop-now>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import axios from 'axios'
import {mapGetters} from "vuex";

export default {
  name: 'r-product-products',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 3},
    isVertical: {type: Boolean, required: false, default: true},
    product: {type: Object, required: false},
    type: {type: Object, required: false, default: 1},
  },
  data() {
    return {
      payload: {},
      products: {
        data: []
      }
    }
  },
  async fetch() {
    this.payload = {
      product_id: this.product.id,
      type: this.type,
      limit: process.env.APP_LIMIT,
      filters: []
    };

    await this.onProducts();
  },
  computed: {
    hasProducts() {
      return this.products.data.length > 0;
    },
  },
  methods: {
    async onProducts() {
      this.products = await this.$store.dispatch('shop/onProducts', this.payload);
    },
    isFlush() {
      return Math.floor(Math.random() * Math.floor(2));
    }
  }
};
</script>

