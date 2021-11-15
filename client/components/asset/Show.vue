<template>
  <div class="r-p-24">
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-asset-photo :product="product"></r-asset-photo>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card class="r-bg-dark">
              <r-asset-info :product="product"></r-asset-info>
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
                  <r-asset-body :is-showing="true" :product="product"></r-asset-body>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-asset-buy :product="product"></r-asset-buy>
                </a-col>
              </a-row>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-asset-meta :product="product"></r-asset-meta>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-asset-slider :columns="3"
                            :title="'From this collection'"
                            :route="product.store.route"
                            :filters="{store_id: product.store_id}"></r-asset-slider>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-asset-history :product="product"></r-asset-history>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-asset-offers :product="product"></r-asset-offers>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-asset-show',
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
