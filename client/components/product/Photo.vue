<template>
  <r-avatar shape="square"
            :size="size"
            :src="product.thumbnail_url"
  />
</template>
<script>
export default {
  name: 'r-product-photo',
  props: {
    product: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 180 },
  },
  data () {
    return {
      quantity: 1,
      styles: null,
    }
  },
  created () {

  },
  methods: {
    onProduct () {
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'product'
      this.$store.dispatch('base/onModal', modal)

      this.$store.dispatch('base/onProduct', this.product)
    }
  },
}
</script>
