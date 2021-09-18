<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none-sm">
    <div class="r-mv-96">
      <r-services :is-show="isShow" :theme="theme"></r-services>
    </div>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller-services',
  props: {
    isShow: { type: Boolean, required: false, default: false },
    theme: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
    }
  },
  computed: mapGetters({
    products: 'content/products',
    product: 'content/product'
  }),
  methods: {
    onCloseItem () {
    },
    isCurrent (item) {
      return item === this.product
    },
    isHidden (item) {
      if (this.product === null) {
        return false
      }

      return this.product.slug === item.slug
    }
  }
}
</script>
