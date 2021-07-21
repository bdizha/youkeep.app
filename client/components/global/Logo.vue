<template>
  <nuxt-link class="r-logo" :class="{'r-logo__icon': isIcon}" to="/">
    <img v-if="isIcon" :alt="title" src="~/assets/icon.png"/>
    <img v-if="!isIcon" :alt="title" src="~/assets/logo.png"/>
  </nuxt-link>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    isIcon: { type: Boolean, required: false, default: true }
  },
  name: 'r-logo',
  data () {
    return {
      title: 'It\'s shopping time!',
      logo: (this.isIcon ? 'icon' : 'logo')
    }
  },
  created () {
  },
  computed: {
    ...mapGetters({
      isDark: 'base/isDark'
    })
  },
  methods: {},
}
</script>
