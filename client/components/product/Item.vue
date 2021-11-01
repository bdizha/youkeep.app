<template>
  <nuxt-link :to="product.route">
    <a-card class="r-bg-dark r-p-0 r-seller-item" :hoverable="true">
      <a-row align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <div :style="getPhotoCoverStyle()" class="r-bg-cover r-bg-primary-light">
            <r-avatar data-src="/patters/pattern_dark.svg" :size="300"
                      class="r-avatar-block"
            ></r-avatar>
          </div>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-product-footer :product="product"></r-product-footer>
        </a-col>
      </a-row>
    </a-card>
  </nuxt-link>
</template>
<script>

export default {
  name: 'r-product-item',
  props: {
    isVertical: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false }
  },
  data () {
    return {}
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
