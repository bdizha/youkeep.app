<template>
  <nuxt-link :class="{'r-logo__icon': isIcon}" class="r-logo" to="/">
    <img v-if="isIcon && isDark" :alt="title" src="~/assets/icon_white.svg"/>
    <img v-if="isIcon && !isDark" :alt="title" src="~/assets/icon.svg"/>
    <img v-if="!isIcon && isDark" :alt="title" src="~/assets/logo_white.svg"/>
    <img v-if="!isIcon && !isDark" :alt="title" src="~/assets/logo.svg"/>
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
