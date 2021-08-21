<template>
  <a-row align="top" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-product-breadcrumbs :product="product"></r-product-breadcrumbs>
      <a-row :gutter="[24,24]" align="top"
             justify="start" type="flex"
      >
        <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
              <a-card v-if="product" class="r-product-show">
                <a-row :gutter="[24,24]" align="top"
                       justify="center" type="flex"
                >
                  <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <r-product-photos :photos="product.photos" :product="product" :size="650"></r-product-photos>
                  </a-col>
                  <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <div class="r-p-24">
                      <r-product-credit :is-showing="true" :product="product"></r-product-credit>
                      <r-product-header :is-showing="true" :product="product"></r-product-header>
                      <r-rate :rating="product.rating"></r-rate>
                      <r-product-price :is-showing="true" :product="product"></r-product-price>
                      <r-product-types v-if="productItem.key" :item-key="productItem.key"
                                       :product="product" :product-types="product.types"
                      ></r-product-types>
                      <r-product-actions v-if="productItem.key"
                                         :is-showing="true" :item-key="productItem.key"
                                         :product="product"
                      ></r-product-actions>
                    </div>
                  </a-col>
                </a-row>
                <r-product-info :product="product"></r-product-info>
              </a-card>
            </a-col>
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
              <div class="r-ph-24">
                <h3 class="r-heading r-text-black">
                  Popular Stores
                </h3>
              </div>
            </a-col>
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
              <div class="r-ph-24">
                <p class="r-text-normal">Realtime product recommendations just for you</p>
              </div>
            </a-col>
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}" class="r-hide-sm">
              <div class="r-grey-shadow r-ph-24">
                <div class="r-margin-out">
                  <r-product-categories :columns="3" :product="product" :types="[1,2,3]"></r-product-categories>
                </div>
              </div>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 6 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <div class="r-grey-shadow r-ph-24 r-relative">
            <r-store-popover v-if="hasStore && hasProduct" :store="store"></r-store-popover>
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
    hasProduct: 'base/hasProduct',
    store: 'base/store',
    hasStore: 'base/hasStore',
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
