<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <nuxt-link :to="product.route">
        <r-asset-photo :product="product"></r-asset-photo>
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-asset-head',
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    theme: { type: String, required: false, default: 'tertiary' },
    product: {
      type: Object,
      required: true,
      default: () => {
        return {
          currency: null,
          currency_url: null,
          store: {
            photo_url: '/patterns/pattern-dark.svg'
          }
        }
      }
    }
  },
  data () {
    return {
      accents: {
        primary: 'secondary',
        secondary: 'tertiary',
        tertiary: 'primary',
        dark: 'dark'
      }
    }
  },
  created () {
  },
  computed: {
    store () {
      return this.product.store
    }
  },
  methods: {
    getBgClass () {
      let theme = 'dark'
      if (this.isDrop) {
        theme = this.theme + '-light'
      }
      return `r-bg-${theme}`
    },
    getTextClass () {
      return `r-text-${this.theme}`
    },
    getBtnClass () {
      return `r-btn-${this.accents[this.theme]}`
    }
  }
}
</script>
