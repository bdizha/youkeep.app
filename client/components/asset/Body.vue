<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row justify="start" align="top" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-bold r-text-white r-ellipsis">
            {{ store.name }}
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-white r-ellipsis">
            <nuxt-link class="r-text-primary" :to="product.route">
              {{ product.name }}
            </nuxt-link>
          </p>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="!isFeatured && !isDrop"
           :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[12,12]" justify="start" align="top" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-asset-price :has-title="true" :product="product"></r-asset-price>
        </a-col>
        <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-asset-status :has-title="true" :product="product"></r-asset-status>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-asset-body',
  props: {
    isFeatured: { type: Boolean, required: false, default: false },
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
