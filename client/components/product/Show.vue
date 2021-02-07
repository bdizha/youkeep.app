<template>
  <a-row type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-product-breadcrumbs :product="product"></r-product-breadcrumbs>
      <a-row :gutter="[24,24]" type="flex"
             justify="start" align="top">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 18 }">
          <a-card v-if="product" class="r-product-show">
            <a-row :gutter="[24,24]" type="flex"
                   justify="center" align="top">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
                <r-product-photos :photos="product.photos" :product="product" :size="650"></r-product-photos>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }" :lg="{ span: 8 }">
                <r-product-credit :is-showing="true" :product="product"></r-product-credit>
                <r-product-header :is-showing="true" :product="product"></r-product-header>
                <r-rate :rating="product.rating"></r-rate>
                <r-product-price :is-showing="true" :product="product"></r-product-price>
                <r-product-types :is-showing="true" :product="product"></r-product-types>
                <r-product-actions :is-showing="true" :size="'default'" :product="product"></r-product-actions>
              </a-col>
            </a-row>
            <r-product-info :product="product"></r-product-info>
          </a-card>
          <a-row class="r-mv-24" type="flex" justify="center">
            <a-col class="r-ph-24" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
              <h3 class="r-heading r-text-black">
                You may also like
              </h3>
              <p class="r-text-normal">Realtime product recommendations just for you</p>
            </a-col>
            <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
              <div class="r-grey-shadow r-ph-24">
                <div class="r-margin-out">
                  <r-product-categories columns="3" :types="[1,2,3]" :product="product"></r-product-categories>
                </div>
              </div>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }" :lg="{ span: 6 }">
          <div class="r-grey-shadow r-ph-24">
            <div class="r-margin-out">
              <r-product-categories :columns="1" :product="product"></r-product-categories>
            </div>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-show',
  props: {},
  data() {
    return {}
  },
  computed: mapGetters({
    category: 'shop/category',
    product: 'base/product',
    store: 'base/store',
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
