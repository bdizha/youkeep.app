<template>
  <div class="ant-card-cover r-pull-r-24 r-product-photo">
    <img :src="product.thumbnail_url" :alt="product.name"/>
  </div>
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
