<template>
  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-button block
                size="large"
                class="r-btn-bordered-grey"
                @click="onShow"
      >
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col class="r-text-left r-text-capitalize" :xs="{span: 18}" :sm="{span: 18}" :md="{span: 18}"
                 :lg="{span: 18}"
          >
            {{ variant.name ? 'Selected' : null }} {{ productType.name + ': ' }} <b>{{ variant.name }}</b>
          </a-col>
          <a-col class="r-text-right" :xs="{span: 6}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
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
  },
  data () {
    return {
      selected: null,
      isVisible: false,
      variant: { name: '' },
      defaultVariant: null,
    }
  },
  computed: mapGetters({
    popover: 'base/popover',
  }),
  mounted () {

  },
  methods: {
    onFilter () {
      this.$store.dispatch('base/onFilters', this.selected)
    },
    onShow () {
      this.isVisible = true
      this.$store.dispatch('base/onPopover', { name: this.productType.name })

      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'product'
      this.$store.dispatch('base/onModal', modal)
    },
    async onVariant () {
      this.variant = this.productType.variants.find(item => item.id === this.selected)

      await this.$store.dispatch('product/onVariant', this.variant)
      await this.$store.dispatch('product/onProductType', this.productType)
    },
    async onSelect () {
      await this.onVariant()
      this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    },
  },
}
</script>
