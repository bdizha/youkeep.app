<template>
  <a-card class="r-product" hoverable>
    <div v-if="isVertical" slot="cover">
      <nuxt-link :to="product.route"
                 style="display: block; width: 100%;"
      >
        <r-product-photo :product="product">
        </r-product-photo>
      </nuxt-link>
    </div>
    <a-card-meta>
      <template slot="description">
        <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
          <a-col v-if="!isVertical" :lg="{ span:  isVertical ? 24 : 12 }"
                 :sm="{ span:  isVertical ? 24 : 12 }" :xs="{ span: isVertical ? 24 : 12 }"
          >
            <nuxt-link :to="product.route">
              <r-product-photo :product="product">
              </r-product-photo>
            </nuxt-link>
          </a-col>
          <a-col :lg="{ span:  isVertical ? 24 : 12 }"
                 :sm="{ span:  isVertical ? 24 : 12 }" :xs="{ span: isVertical ? 24 : 12 }"
          >
            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <r-product-credit :product="product"></r-product-credit>
                <r-rate :rating="product.rating"></r-rate>
              </a-col>
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <nuxt-link :to="product.route">
                  <r-product-header :product="product"></r-product-header>
                  <r-product-price :product="product"></r-product-price>
                </nuxt-link>
              </a-col>
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <r-product-store :store="product.store"></r-product-store>
              </a-col>
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <r-product-actions :product="product"></r-product-actions>
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

export default {
  name: 'r-product-item',
  props: {
    isVertical: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false }
  },
  data () {
    return {}
  },
  created () {
    this.onProduct()
  },
  methods: {
    onProduct () {
    },
  },
}
</script>
