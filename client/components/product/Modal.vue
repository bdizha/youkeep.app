<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="modal"
  >
    <a-row :gutter="[12,12]" type="flex" justify="center" align="middle">
      <a-col v-if="hasItem" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <h2 class="r-heading-light">
          {{ productItem.product.name }}
        </h2>
        <div class="r-product-summary">
          Choose your product options below:
        </div>
      </a-col>
      <a-col class="r-product-modal" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <a-collapse :default-active-key="activeProductType" expandIconPosition="right">
          <a-collapse-panel class="r-collapse-panel"
                            v-for="(productType, index) in productItem.product.types"
                            v-if="productType.is_required"
                            :key="productType.name"
          >
            <template slot="header">
              <span>{{ productType.name + ': ' }}</span>
              <span v-if="!isSelected(productType)" class="r-text-primary">
                (required)
              </span>
              <template v-if="isSelected(productType)">
                <span class="r-text-secondary">
                {{ variant(productType).name }}
                </span>
                <span class="r-text-normal">(selected)</span>
              </template>
            </template>
            <r-product-options :product-item="productItem"
                               :product="product"
                               :product-type="productType"
            ></r-product-options>
          </a-collapse-panel>
        </a-collapse>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <r-product-actions :is-showing="false"
                           :has-add-to-cart="true"
                           :item-key="productItem.key"
                           :product="product"></r-product-actions>
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
  computed: {
    activeProductType () {
      if (this.productItem.productType) {
        return this.productItem.productType.name
      } else if (this.product.types !== undefined) {
        let productType = this.product.types.find((productType, index) => productType.type !== 0)

        if (productType !== undefined) {
          return productType.name
        }
      }
      return null
    },
    ...mapGetters({
      category: 'base/category',
      product: 'base/product',
      productItem: 'product/item',
      hasItem: 'product/hasItem',
      hasProduct: 'base/hasProduct',
      processes: 'base/processes'
    }),
  },
  created () {
    this.payload()
  },
  methods: {
    isSelected (productType) {
      return this.productItem !== undefined && this.productItem.productTypes.includes(productType.type)
    },
    variant (productType) {
      if (this.productItem === undefined) {
        return { name: null }
      }

      let variant = this.productItem.variants.find(variant => variant.product_type.type === productType.type)
      if (variant === undefined) {
        return { name: '>>>>' }
      }

      return variant
    },
    payload () {
    },
    onVariant (variant) {

    }
  },
}
</script>
