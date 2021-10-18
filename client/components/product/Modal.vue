<template>
  <r-modal-template :closable="closable"
                    :current="modal"
                    :mask-closable="maskClosable"
  >
    <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
      <a-col v-if="productItem.hasProduct" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-photo :product="product"></r-product-photo>
      </a-col>
      <a-col v-if="productItem.hasProduct" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-header :product="product"></r-product-header>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-product-modal">
        <div class="r-pull-24">
          <a-collapse :defaultActiveKey="'0'" expandIconPosition="right">
            <a-collapse-panel v-for="(option, index) in options"
                              :key="index"
                              class="r-collapse-panel"
            >
              <template slot="header">
                <h4 class="r-heading">
                  {{ option.product_type.name + ': ' }}
                </h4>
                <p class="r-text-normal">
              <span v-if="isRequired(option)">
                Required
              </span>
                  <span v-if="hasChoices(option) && !isRequired(option)">
                Choose up to {{ option.required_max }}
              </span>
                </p>
              </template>
              <r-product-options :product="product"
                                 :option="option"
                                 :item-key="itemKey"
                                 :item="productItem"
              ></r-product-options>
            </a-collapse-panel>
          </a-collapse>
        </div>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <r-product-actions :is-showing="true"
                           :product="product"
                           :item="productItem"
                           :item-key="itemKey"
                           :size="size"
        ></r-product-actions>
      </a-col>
    </a-row>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
  </r-modal-template>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: true },
    size: { type: String, required: false, default: 'default' }
  },
  data () {
    return {
      itemKey: null,
      options: [],
      item: {
        hasProduct: true,
        currentOption: null,
        product: null,
        variant: null,
        options: [],
        optionIds: [],
        quantity: 0,
        key: null
      },
      modal: 'product',
      message: 'Thank you for successfully signing up with Spazastop. Enjoy your business!'
    }
  },
  computed: {
    ...mapState({
      productItem (state) {
        const productItem = state.product.items.find(item => item.key === this.itemKey)

        if (productItem === undefined) {
          return this.item
        }
        return productItem
      }
    }),
    ...mapGetters({
      category: 'base/category',
      product: 'base/product',
      hasItem: 'product/hasItem',
      processes: 'base/processes'
    })
  },
  async created () {
    await this.onInit()
  },
  methods: {
    async onInit () {
      const productItem = {}
      const current = new Date()
      this.itemKey = current.getMilliseconds() * this.product.id

      this.options = this.product.options
      productItem.key = this.itemKey
      productItem.product = this.product
      productItem.currentOption = {
        options: []
      }
      productItem.quantity = 0
      productItem.optionIds = []
      productItem.options = this.options

      await this.$store.dispatch('product/onItem', productItem)
    },
    isRequired (option) {
      return option.required_min > 0
    },
    hasChoices (option) {
      return option.required_max > 0
    }
  }
}
</script>
