<template>
  <a-radio-group v-model="selected"
                 @change="onSelect"
  >
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col v-for="(variant, index) in productType.variants"
             :key="variant.id"
             :lg="{span: 8}" :md="{span: 8 }" :sm="{span: 12}" :xs="{span: 12}"
      >
        <a-tooltip placement="top">
          <template slot="title">
            <span>Select: {{ productType.name }}</span>
          </template>
          <a-radio :checked="true"
                   :value="variant.id"
          >
            {{ variant.name }}
          </a-radio>
        </a-tooltip>
      </a-col>
    </a-row>
  </a-radio-group>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-options',
  props: {
    product: { type: Object, required: false, default: { name: null, types: [] } },
    productItem: { type: Object, required: true, default: null },
    productType: { type: Object, required: true, default: { name: null, variants: [] } },
  },
  data () {
    return {
      selected: null,
      isVisible: false,
      variant: { name: '' },
      type: {
        name: this.productType.name,
        type: this.productType.type,
        is_saleable: this.productType.is_saleable
      },
      defaultVariant: null,
    }
  },
  created () {
    this.selected = this.variantId
  },
  computed: {
    variantId () {
      let variant = this.productItem.variants.find((variant, index) => {
        if (this.productType.type === variant.product_type.type) {
          return true
        }
      })

      if (variant !== undefined) {
        return variant.id
      } else {
        return null
      }
    },
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
    async onVariant () {
      let productItem = JSON.parse(JSON.stringify(this.productItem))

      console.log('productItem', productItem)

      let variant = this.productType.variants.find(item => item.id === this.selected)

      productItem.variants = productItem.variants.filter((item, index) => {
        if (item.product_type.type !== variant.product_type.type) {
          return true
        }
      })

      if (!productItem.productTypes.includes(this.productType.type)) {
        productItem.productTypes.push(this.productType.type)
      }

      productItem.productType = this.productType
      productItem.variantIds.push(variant.id)
      if (this.productType.is_saleable) {
        productItem.variant = variant
      }
      productItem.variants.push(variant)

      await this.$store.dispatch('product/onItem', productItem)
    },
    async onSelect () {
      await this.onVariant()
      this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    },
  },
}
</script>
