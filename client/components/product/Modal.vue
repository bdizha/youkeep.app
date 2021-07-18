<template>
  <r-modal-template :closable="closable"
                    :current="modal"
                    :mask-closable="maskClosable"
  >
    <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
      <a-col v-if="hasItem" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <h4 class="r-heading">
          {{ productItem.product.name }}
        </h4>
      </a-col>
      <a-col v-if="hasItem" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-price :product="productItem.product"></r-product-price>
      </a-col>
      <a-col v-if="hasItem" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <h4 class="r-heading-light">
          Choose your product options below:
        </h4>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-product-modal">
        <a-collapse :defaultActiveKey="1" accordion expandIconPosition="right">
          <a-collapse-panel v-for="(productType, index) in productItem.product.types"
                            v-if="productType.is_required"
                            :key="index.toString()"
                            class="r-collapse-panel"
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
            <r-product-options :product="product"
                               :product-item="productItem"
                               :product-type="productType"
            ></r-product-options>
          </a-collapse-panel>
        </a-collapse>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-actions :has-add-to-cart="true"
                           :is-showing="false"
                           :item-key="productItem.key"
                           :product="product"
        ></r-product-actions>
      </a-col>
    </a-row>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
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
