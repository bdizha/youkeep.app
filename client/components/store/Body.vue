<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[12,12]" class="r-text-center" justify="start" align="top" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <nuxt-link class="r-text-normal r-text-bold r-text-white r-ellipsis" :to="store.route">
            {{ store.name }}
          </nuxt-link>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal r-text-white r-ellipsis r-ellipsis__42">
            {{ store.description }}
          </p>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-body',
  props: {
    isFeatured: { type: Boolean, required: false, default: false },
    isDrop: { type: Boolean, required: false, default: false },
    theme: { type: String, required: false, default: 'tertiary' },
    store: {
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
