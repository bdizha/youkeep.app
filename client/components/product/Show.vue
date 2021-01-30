<template>
  <a-row type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-product-breadcrumbs :product="product"></r-product-breadcrumbs>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
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
                <r-product-header :is-showing="true" :product="product"></r-product-header>
                <r-rate :rating="product.rating"></r-rate>
                <r-product-price :is-showing="true" :product="product"></r-product-price>
                <r-product-credit :is-showing="true" :product="product"></r-product-credit>
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
                  <r-product-recommended :product="product"></r-product-recommended>
                </div>
              </div>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }" :lg="{ span: 6 }">
          <div class="r-grey-shadow r-ph-24">
            <div class="r-margin-out">
              <r-product-related :product="product"></r-product-related>
            </div>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";
import RProductRecommended from "@/client/components/product/Recommended";

export default {
  layout: 'product',
  name: 'r-product-show',
  components: {RProductRecommended},
  props: {},
  data() {
    return {}
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
