<template>
  <a-card class="r-pull-24">
    <div slot="cover">
      <r-avatar :size="size"
                :data-src="product.thumbnail_url"
                shape="square"
      />
    </div>
  </a-card>
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
