<template>
  <a-radio-group v-model="selected"
                 @change="onSelect"
  >
    <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
      <a-col v-for="(variant, index) in productType.variants"
             :key="variant.id"
             :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24 }" :lg="{span: 24}"
      >
        <a-tooltip placement="top">
          <template slot="title">
            <span>Select: {{ productType.name }}</span>
          </template>
          <a-radio :value="variant.id">
            {{ variant.name }}
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
  computed: mapGetters({
    popover: 'base/popover',
  }),
  mounted () {

  },
  methods: {
    onShow () {
      this.isVisible = true
      this.$store.dispatch('base/onPopover', { name: this.productType.name })
    },
    async onVariant () {
      this.variant = this.productType.variants.find(item => item.id === this.selected)

      await this.$store.dispatch('product/onVariant', this.variant)
      await this.$store.dispatch('product/onProductType', this.type)
    },
    async onSelect () {
      await this.onVariant()
      this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    },
  },
}
</script>
