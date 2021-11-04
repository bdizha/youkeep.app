<template>
  <a-row class="r-text-left" :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :flex="`${size}px`">
      <r-avatar :size="size"
                :class="{'ant-avatar-sm': size < 45}"
                :data-src="store.photo_url"
                shape="square"
                src-placeholder="/assets/icon_default.png"
      />
    </a-col>
    <a-col v-if="hasTitle" flex="1 1 0">
      <p class="r-text-xs r-text-bold">
        {{ store.name }}
      </p>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-head',
  components: {},
  props: {
    store: {
      type: Object,
      required: true,
      default: () => {
      }
    },
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
      const random = Math.floor(Math.random() * Math.floor(3))

      const theme = this.themes[random]

      return `r-bg-${theme} r-text-white`
    }
  }
}
</script>
