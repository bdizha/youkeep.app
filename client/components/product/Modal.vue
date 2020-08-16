<template>
  <r-modal class="r-modal-product"
           :mask-closable="false"
           :closable="true"
           current="product"
           style="position: relative;width: 75%">
    <div class="r-pt-24">
      <a-card v-if="product" class="r-product">
        <a-row class="r-product-modal" :gutter="36" type="flex"
               justify="center" align="middle">
          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
            <r-product-credit :is-showing="true" :product="product"></r-product-credit>
            <r-product-photos :photos="product.photos" :product="product" :size="400"></r-product-photos>
          </a-col>
          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
            <r-product-header :is-showing="true" :product="product"></r-product-header>
            <r-product-price :is-showing="true" :product="product"></r-product-price>
            <r-product-types :is-showing="true" :product="product"></r-product-types>
            <r-product-actions :is-showing="true" :size="'large'" :product="product"></r-product-actions>
          </a-col>
        </a-row>
      </a-card>
    </div>
    <r-product-info v-if="false" :product="product"></r-product-info>
    <a-row class="r-mt-48" type="flex" justify="center">
      <a-col class="gutter-row" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
        <h3 class="r-heading r-text-black">
          You may also like
        </h3>
        <p class="r-text-normal">Realtime product recommendations just for you</p>
      </a-col>
    </a-row>
    <div class="r-product-products">
      <r-product-products v-if="false" :product="product"></r-product-products>
    </div>
  </r-modal>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-product-modal',
    props: {},
    data() {
      return {
        hasData: true,
        categories: [],
      };
    },
    mounted() {
      this.payload();
    },
    computed: mapGetters({
      store: 'store/store',
      cart: 'cart/cart',
      product: 'store/product',
    }),
    methods: {
      payload() {
      },
    },
  };
</script>
