<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="modal"
  >
    <a-row class="r-product-show" type="flex" justify="center" align="middle">
      <a-col v-if="hasProduct" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <h3 class="r-heading">
          {{ product.name }}
        </h3>
        <div class="r-product-summary">
          {{ product.summary }}
        </div>
      </a-col>
      <a-col class="r-product-modal" v-if="hasProduct" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <a-collapse default-active-key="1" expandIconPosition="right">
          <a-collapse-panel class="r-collapse-panel"
                            v-for="(productType, index) in product.types"
                            v-if="productType.variants.length > 0 && productType.type > 0"
                            :key="productType.name"
          >
            <template slot="header">
              <span class="r-text-normal">Select:</span>
              <span>{{ productType.name }}</span>
            </template>
            <r-product-options :product="product" :product-type="productType"></r-product-options>
          </a-collapse-panel>
        </a-collapse>
      </a-col>
    </a-row>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      modal: 'product',
      message: 'Thank you for successfully signing up with Shopple. Enjoy your shopping!'
    }
  },
  computed: mapGetters({
    category: 'base/category',
    product: 'base/product',
    productType: 'product/productType',
    hasProductType: 'product/hasProductType',
    hasProduct: 'base/hasProduct',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
