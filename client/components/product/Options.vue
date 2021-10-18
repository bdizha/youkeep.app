<template>
  <a-radio-group v-model="selected"
                 @change="onSelect"
  >
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col v-for="(option, index) in option.options"
             :key="index"
             :lg="{span: 24 }"
             :md="{span: 24 }"
             :sm="{span: 24 }"
             :xs="{span: 24 }"
      >
        <a-tooltip placement="top">
          <template slot="title">
            <span>Select: {{ option.product_type.name }}</span>
          </template>
          <a-radio :checked="true"
                   :value="option"
          >
            {{ option.product_type.name }}
          </a-radio>
        </a-tooltip>
      </a-col>
    </a-row>
  </a-radio-group>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-options',
  props: {
    product: { type: Object, required: false, default: { name: null, types: [] } },
    itemKey: { type: Number, required: false, default: null },
    item: { type: Object, required: false, default: null },
    option: { type: Object, required: true, default: { name: null, options: [] } }
  },
  data () {
    return {
      selected: null,
      isVisible: false
    }
  },
  created () {
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
      popover: 'base/popover'
    })
  },
  mounted () {
  },
  methods: {
    onShow () {
      this.isVisible = true
      this.$store.dispatch('base/onPopover', { name: this.productType.name })
    },
    async onOption (option) {
      const productItem = JSON.parse(JSON.stringify(this.productItem))

      console.log('productItem', productItem)
      console.log('this.selected', this.selected)
      console.log('this.option', option)

      productItem.options = productItem.options.filter((item) => {
        if (item.product_type.type !== option.product_type.type) {
          return true
        }
      })

      productItem.currentOption = option
      productItem.optionIds.push(option.id)
      productItem.options.push(option)

      if (option.options.length > 0) {
        productItem.hasProduct = true
        const modal = {}
        modal.isVisible = true
        modal.isClosable = true
        modal.title = option.product_type.name
        modal.current = 'product'

        await this.$store.dispatch('base/onModal', modal)
      } else {
        productItem.hasProduct = false
      }

      await this.$store.dispatch('product/onItem', productItem)
    },
    async onSelect () {
      await this.onOption()
      await this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    }
  }
}
</script>
