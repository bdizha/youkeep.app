<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :flex="`${size}px`">
      <div :class="getBgClass()">
        <r-avatar :size="size"
                  :data-src="store.photo_url"
                  shape="circle"
                  src-placeholder="/patterns/pattern-dark.svg"
        />
      </div>
    </a-col>
    <a-col v-if="hasTitle" flex="1 1 0">
      <p class="r-text-xs r-text-white">
        {{ store.name }}
      </p>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-line',
  components: {},
  props: {
    store: {
      type: Object,
      required: true,
      default: () => {
      }
    },
    hasOverlay: { type: Boolean, required: false, default: true },
    hasTitle: { type: Boolean, required: false, default: true },
    size: { type: Number, required: false, default: 36 }
  },
  data () {
    return {
      themes: [
        'primary',
        'secondary',
        'dark'
      ]
    }
  },
  computed: mapGetters({}),
  mounted () {
  },
  methods: {
    onDrawer () {
    },
    getPhotoCoverStyle () {
      return `background-image: url(${this.store.photo_url});`
    },
    getBgClass () {
      let photoClass = null
      if (this.hasOverlay) {
        photoClass = 'r-store-photo'
      } else {
        return null
      }

      const random = Math.floor(Math.random() * Math.floor(3))
      const theme = this.themes[random]

      return `r-bg-${theme} ${photoClass}`
    }
  }
}
</script>
