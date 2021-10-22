<template>
  <r-modal-template :closable="closable"
                    :current="currentModal"
                    :mask-closable="maskClosable"
  >
    <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
      <a-col v-if="modal.hasTitle" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col>
            <a-button block
                      class="r-btn-bordered-dark"
                      type="secondary"
                      @click="onBack"
            >
              <a-icon type="left"></a-icon>
            </a-button>
          </a-col>
          <a-col flex="auto">
            <h4 class="r-heading">
              {{ modal.title }}
            </h4>
          </a-col>
        </a-row>
      </a-col>
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
                  {{ option.product_type.name + ': ' }} {{ option.required_min }} vs {{ option.required_max }}
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
              <r-product-choice v-if="option.is_choice" :product="product"
                                 :option="option"
                                 :item-key="itemKey"
                                 :item="productItem"
              ></r-product-choice>
              <r-product-radio v-if="!option.is_choice" :product="product"
                                :option="option"
                                :item-key="itemKey"
                                :item="productItem"
              ></r-product-radio>
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
      item: {
        hasProduct: true,
        option: null,
        product: null,
        variant: null,
        options: [],
        optionIds: [],
        quantity: 0,
        key: null
      },
      currentModal: 'product',
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
      choices: 'product/choices',
      options: 'product/options',
      isVisible: 'product/isVisible',
      parentOptions: 'product/parentOptions',
      category: 'base/category',
      product: 'base/product',
      modal: 'base/modal',
      hasItem: 'product/hasItem',
      processes: 'base/processes'
    })
  },
  async mounted () {
    await this.onInit()
  },
  methods: {
    async onBack () {
      console.log('onBack this.parentOptions', this.parentOptions)
      const option = this.parentOptions[this.parentOptions.length - 1]

      await this.$store.dispatch('base/onModalTitle', null)

      if (option.options !== undefined) {
        await this.$store.dispatch('product/onOptions', option.options)
        console.log('onBack options', option.options)
      }
    },
    async onInit () {
      const choices = []
      const productItem = {}
      const current = new Date()
      this.itemKey = current.getMilliseconds() * this.product.id
      productItem.key = this.itemKey
      productItem.product = this.product
      productItem.hasProduct = true
      productItem.option = null
      productItem.quantity = 0
      productItem.optionIds = []
      productItem.options = []
      const option = null
      const options = this.product.options
      const params = { productItem, option, options, choices }

      await this.$store.dispatch('product/onOption', params)
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
