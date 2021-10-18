<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-button block
                class="r-btn-bordered-grey"
                size="large"
                @click="onShow"
      >
        <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
          <a-col :lg="{span: 18}" :md="{span: 18}" :sm="{span: 18}" :xs="{span: 18}"
                 class="r-text-left r-text-capitalize"
          >
            <span>{{ productType.name + ': ' }}</span>
            <span v-if="!isSelected" class="r-text-primary">
              (required)
            </span>
            <template v-if="isSelected">
                <span class="r-text-secondary">
                {{ variant.name }}
                </span>
              <span class="r-text-normal">(selected)</span>
            </template>
          </a-col>
          <a-col :lg="{span: 6}" :md="{span: 6}" :sm="{span: 6}" :xs="{span: 6}" class="r-text-right">
            <a-icon type="right"/>
          </a-col>
        </a-row>
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-variants',
  props: {
    product: { type: Object, required: true, default: { name: null, types: [] } },
    productType: { type: Object, required: true, default: { name: null, variants: [] } },
    itemKey: { type: Number, required: false, default: null },
  },
  data () {
    return {
      selected: null,
      isVisible: false,
      defaultVariant: null,
    }
  },
  computed: {
    ...mapState({
      productItem (state) {
        return state.product.items.find(item => item.key === this.itemKey)
      }
    }),
    ...mapGetters({
      popover: 'base/popover'
    }),
    isSelected () {
      return this.productItem !== undefined && this.productItem.productOptions.includes(this.productType.type)
    },
    variant () {
      if (this.productItem === undefined) {
        return { name: null }
      }

      const variant = this.productItem.variants.find(variant => variant.product_type.type === this.productType.type)
      if (variant === undefined) {
        return { name: '>>>>' }
      }

      return variant
    }
  },
  mounted () {
  },
  methods: {
    onShow () {
      this.isVisible = true
      this.$store.dispatch('base/onPopover', { name: this.productType.name })

      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'product'
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
