<template>
  <NuxtLink  :prefetch="true" class="r-logo" to="/">
    <img src="~/assets/icon.svg" :alt="title"/>
  </NuxtLink>
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
