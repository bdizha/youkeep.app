<template>
  <a-row>
    <a-col :span="24">
      <a-row align="middle" justify="start" type="flex">
        <a-col :span="24">
          <h4 class="r-product-text">
            {{ product.name }}
          </h4>
          <div v-if="isShowing" class="r-product-summary">
            {{ product.summary }}
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-header',
  props: {
    product: { type: Object, required: false, default: null },
    isShowing: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      quantity: 1
    }
  },
  created () {
  },
  computed: {},
  methods: {
    onProduct () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'product'
      this.$store.dispatch('base/onModal', modal)

      this.$store.dispatch('base/onProduct', this.product)
    }
  }
}
</script>
