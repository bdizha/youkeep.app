<template>
  <a-card class="r-p-0 r-text-left" :class="getBgClass()">
    <a-row class="r-store-meta r-store-meta__drop"
           align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <nuxt-link :to="product.route">
          <a-card :style="getPhotoCoverStyle()"
                  class="r-bg-cover r-dark"
          >
            <r-avatar shape="circle"
                      data-src="/patters/pattern_dark.svg" :size="300"
                      class="r-avatar-block"
            ></r-avatar>
          </a-card>
        </nuxt-link>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-p-24">
          <r-product-foot :product="product" :is-drop="isDrop" :theme="theme"></r-product-foot>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-product-item',
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    isVertical: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false }
  },
  data () {
    return {
      theme: 'dark'
    }
  },
  computed: {
    ...mapGetters({})
  },
  created () {
    this.onTheme()
  },
  methods: {
    getPhotoCoverStyle () {
      return `background-image: url(${this.product.photo_url});`
    },
    getBgClass () {
      let theme = 'dark'
      if (this.isDrop) {
        theme = this.theme + '-light'
      }
      return `r-bg-${theme}`
    },
    onTheme () {
      if (this.isDrop) {
        const $this = this
        this.$store.dispatch('content/onTheme').then((theme) => {
          $this.theme = theme
        })
      }
    }
  }
}
</script>
