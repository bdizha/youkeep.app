<template>
  <nuxt-link class="r-logo" to="/">
    <img :class="{'r-hide-sm': !isIcon && false, 'r-hide-lg': isIcon && false}"
         :src="imageHost + '/images/' + (isIcon ? 'icon' : 'logo') + '.png'"
         :alt="title"
    />
  </nuxt-link>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    isIcon: { type: Boolean, required: false, default: false }
  },
  name: 'r-logo',
  data () {
    return {
      title: 'It\'s shopping time!'
    }
  },
  created () {
  },
  computed: {
    imageHost () {
      return process.env.APP_URL
    },
    ...mapGetters({
      isDark: 'base/isDark'
    })
  },
  methods: {},
}
</script>
