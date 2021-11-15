<template>
  <a-card :style="getPhotoCoverStyle()"
          class="r-bg-cover r-dark r-card-animate"
  >
    <r-avatar shape="circle"
              data-src="/patterns/pattern-dark.svg" :size="size"
              class="r-avatar-block"
    ></r-avatar>
  </a-card>
</template>
<script>
export default {
  name: 'r-asset-photo',
  props: {
    product: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 300 }
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
