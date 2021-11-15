<template>
  <a-card class="r-p-0 r-store-meta r-store-meta__66" :class="getBgClass()">
    <a-row :gutter="[12, 12]"
           align="middle" justify="start" type="flex"
    >
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <r-asset-head :product="product"></r-asset-head>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <r-store-head :size="60"
                      :has-title="false"
                      :store="product.store"
        ></r-store-head>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-p-24">
          <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-asset-body :is-featured="isFeatured"
                            :product="product"
              ></r-asset-body>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-asset-foot :is-featured="isFeatured"
                            :product="product"
                            :is-drop="isDrop"
                            :theme="theme"
              ></r-asset-foot>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-asset-item',
  props: {
    isFeatured: { type: Boolean, required: false, default: false },
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
