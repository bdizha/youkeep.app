<template>
  <a-card class="r-product" hoverable @click="onProduct">
    <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span:  isVertical ? 24 : 12 }" :md="{ span:  isVertical ? 24 : 12 }"
             :sm="{ span:  24 }" :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col v-if="false" :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <r-product-credit :product="product"></r-product-credit>
            <r-rate :rating="product.rating"></r-rate>
          </a-col>
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <r-product-header :product="product"></r-product-header>
          </a-col>
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <r-product-price :product="product"></r-product-price>
          </a-col>
          <a-col v-if="false" :lg="{ span: 24 }"
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
      <a-col v-if="product.has_photo" :lg="{ span:  isVertical ? 24 : 12 }" :md="{ span:  isVertical ? 24 : 12 }"
             :sm="{ span:  24 }" :xs="{ span: 24 }"
      >
        <r-product-photo :product="product">
        </r-product-photo>
      </a-col>
    </a-row>
    <r-spinner :is-absolute="true"></r-spinner>
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
  },
  methods: {
    async onProduct () {
      const params = {}
      params.route = '/product/' + this.product.slug
      params.slug = this.product.slug

      await this.$store.dispatch('base/onProduct', params)
    }
  }
}
</script>
