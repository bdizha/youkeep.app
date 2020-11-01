<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
    </a-col>
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-card v-if="product" class="r-product-show">
        <a-row class="r-product-modal" :gutter="36" type="flex"
               justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
            <r-product-photos :photos="product.photos" :product="product" :size="650"></r-product-photos>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
            <r-product-header :is-showing="true" :product="product"></r-product-header>
            <r-product-credit :is-showing="true" :product="product"></r-product-credit>
            <r-product-price :is-showing="true" :product="product"></r-product-price>
            <r-product-types :is-showing="true" :product="product"></r-product-types>
            <r-product-actions :is-showing="true" :size="'large'" :product="product"></r-product-actions>
          </a-col>
        </a-row>
        <r-product-info :product="product"></r-product-info>
      </a-card>
      <a-row class="r-mv-48" type="flex" justify="center">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <h3 class="r-heading r-text-black">
            You may also like
          </h3>
          <p class="r-text-normal">Realtime product recommendations just for you</p>
        </a-col>
      </a-row>
      <r-category-list :columns="6"></r-category-list>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-show',
  components: {},
  props: {},
  data() {
    return {
      store: {}
    }
  },
  computed: mapGetters({
    category: 'shop/category',
    product: 'shop/product',
    store: 'shop/store',
    processes: 'base/processes'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
