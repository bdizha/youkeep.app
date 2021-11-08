<template>
  <div class="r-p-24">
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card v-if="product" class="r-bg-dark">
              <r-product-photo :product="product"></r-product-photo>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card class="r-bg-dark">
              <r-product-info :product="product"></r-product-info>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card class="r-bg-dark">
              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-product-header :is-showing="true" :product="product"></r-product-header>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-product-price :is-showing="true" :product="product"></r-product-price>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-product-buy :product="product"></r-product-buy>
                </a-col>
              </a-row>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-product-meta :product="product"></r-product-meta>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-product-history :product="product"></r-product-history>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-product-offers :product="product"></r-product-offers>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-product-events :product="product"></r-product-events>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-slider :columns="6" :filters="{}"></r-product-slider>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-show',
  props: {},
  data () {
    return {
      productItem: { key: null }
    }
  },
  computed: mapGetters({
    category: 'base/category',
    product: 'base/product',
    hasProduct: 'base/hasProduct',
    store: 'shop/store',
    hasStore: 'shop/hasStore',
    processes: 'base/processes',
    productItems: 'product/items'
  }),
  created () {
    this.onInit()
  },
  methods: {
    payload () {
    },
    async onInit () {
      const current = new Date()
      const itemKey = current.getMilliseconds() * this.product.id
      console.log(itemKey, 'current time')

      this.productItem.key = itemKey
      this.productItem.product = this.product
      this.productItem.quantity = 0
      this.productItem.variant = this.product.default_variant
      this.productItem.variantIds = [this.productItem.variant.id]
      this.productItem.productType = null
      this.productItem.productOptions = [this.productItem.variant.type]
      this.productItem.variants = [this.productItem.variant]

      await this.$store.dispatch('product/onItem', this.productItem)

      console.log('on productShow onInit call', this.productItem)
    }
  }
}
</script>
