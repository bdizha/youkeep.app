<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none-sm">
    <div class="r-mv-96">
      <r-services :is-show="isShow" :theme="theme" accent="accent" heading="heading" summary="summary"></r-services>
    </div>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller-services',
  props: {
    isShow: { type: Boolean, required: false, default: false },
    theme: { type: String, required: false, default: 'white' },
    accent: { type: String, required: false, default: 'primary' }
  },
  data () {
    return {
      heading: '<span class="r-text-primary">Built</span> to help your revenue grow',
      summary: 'Youkeep powers growing businesses to securely access equity-free financing with flexible payment terms.'
    }
  },
  computed: mapGetters({
    products: 'content/products',
    product: 'content/product'
  }),
  methods: {
  }
}
</script>
