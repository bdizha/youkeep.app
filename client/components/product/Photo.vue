<template>
  <r-avatar :data-src="product.photo" :size="900"
            class="r-avatar-block"
  ></r-avatar>
</template>
<script>
export default {
  name: 'r-product-photo',
  props: {
    product: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 240 }
  },
  data () {
    return {
      quantity: 1,
      styles: null
    }
  },
  created () {

  },
  methods: {
    getPhotoCoverStyle () {
      return `background-image: url(${this.product.photo_url});`
    }
  }
}
</script>
