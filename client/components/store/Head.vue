<template>
  <div :class="getBgClass()">
    <nuxt-link :to="store.route">
      <r-store-photo :size="size" :store="store"></r-store-photo>
    </nuxt-link>
  </div>
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
    photoUrl: { type: String, required: false, default: null },
    hasOverlay: { type: Boolean, required: false, default: true },
    hasTitle: { type: Boolean, required: false, default: true },
    size: { type: Number, required: false, default: 60 }
  },
  data () {
    return {

    }
  },
  computed: mapGetters({
    'themes': 'content/themes'
  }),
  mounted () {
  },
  methods: {
    onDrawer () {
    },
    getPhotoCoverStyle () {
      return `background-image: url(${this.photoUrl});`
    },
    getBgClass () {
      if (this.hasOverlay) {
        return 'r-store-photo'
      } else {
        return null
      }
    }
  }
}
</script>
