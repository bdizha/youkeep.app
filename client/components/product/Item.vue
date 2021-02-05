<template>
  <a-card hoverable class="r-product">
    <div v-if="isVertical" slot="cover">
      <nuxt-link :to="product.route"
                 style="display: block; width: 100%;">
        <r-product-photo :product="product">
        </r-product-photo>
      </nuxt-link>
    </div>
    <a-card-meta>
      <template slot="description">
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col v-if="!isVertical" :xs="{ span: isVertical ? 24 : 12 }"
                 :sm="{ span:  isVertical ? 24 : 12 }" :lg="{ span:  isVertical ? 24 : 12 }">
            <nuxt-link :to="product.route">
              <r-product-photo :product="product">
              </r-product-photo>
            </nuxt-link>
          </a-col>
          <a-col :xs="{ span: isVertical ? 24 : 12 }"
                 :sm="{ span:  isVertical ? 24 : 12 }" :lg="{ span:  isVertical ? 24 : 12 }">
            <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24 }"
                     :sm="{ span: 24 }" :lg="{ span: 24 }">
                <r-product-credit :product="product"></r-product-credit>
                <r-rate :rating="product.rating"></r-rate>
              </a-col>
              <a-col :xs="{ span: 24 }"
                     :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-row type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <nuxt-link :to="product.route">
                      <r-product-header :product="product"></r-product-header>
                      <r-product-price :product="product"></r-product-price>
                    </nuxt-link>
                  </a-col>
                  <a-col :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <r-product-store :store="product.store"></r-product-store>
                    <r-product-actions :product="product" size="default"></r-product-actions>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <r-spinner :is-absolute="true"></r-spinner>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-item',
  props: {
    isVertical: {type: Boolean, required: false, default: true},
    product: {type: Object, required: false}
  },
  data() {
    return {};
  },
  created() {
    this.onProduct();
  },
  methods: {
    onProduct() {
    },
  },
};
</script>
