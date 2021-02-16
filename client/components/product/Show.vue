<template>
  <a-row type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-product-breadcrumbs :product="product"></r-product-breadcrumbs>
      <a-row :gutter="[24,24]" type="flex"
             justify="start" align="top"
      >
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 18 }">
          <a-card v-if="product" class="r-product-show">
            <a-row :gutter="[24,24]" type="flex"
                   justify="center" align="top"
            >
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
                <r-product-photos :photos="product.photos" :product="product" :size="650"></r-product-photos>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }" :lg="{ span: 8 }">
                <r-product-credit :is-showing="true" :product="product"></r-product-credit>
                <r-product-header :is-showing="true" :product="product"></r-product-header>
                <r-rate :rating="product.rating"></r-rate>
                <r-product-price :is-showing="true" :product="product"></r-product-price>
                <r-product-types v-if="productItem.key" :item-key="productItem.key"
                                 :product-types="product.types" :product="product"
                ></r-product-types>
                <r-product-actions v-if="productItem.key"
                                   :item-key="productItem.key" :is-showing="true"
                                   :product="product"
                ></r-product-actions>
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
            <a-col class="r-hide-sm" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
              <div class="r-grey-shadow r-ph-24">
                <div class="r-margin-out">
                  <r-product-categories :columns="3" :types="[1,2,3]" :product="product"></r-product-categories>
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
    store: 'base/store',
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
      let itemKey = current.getMilliseconds() * this.product.id
      console.log(itemKey, 'current time')

      this.productItem.key = itemKey
      this.productItem.product = this.product
      this.productItem.quantity = 0
      this.productItem.variant = this.product.default_variant
      this.productItem.variantIds = [this.productItem.variant.id]
      this.productItem.productType = null
      this.productItem.productTypes = [this.productItem.variant.type]
      this.productItem.variants = [this.productItem.variant]

      await this.$store.dispatch('product/onItem', this.productItem)

      console.log('on productShow onInit call', this.productItem)
    },
  }
}
</script>
