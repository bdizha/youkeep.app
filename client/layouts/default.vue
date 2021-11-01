<template>
  <a-layout class="r-layout__default" :class="{'r-layout__dark': isDark}">
    <r-header :is-icon="false"></r-header>
    <a-layout-content>
      <nuxt/>
    </a-layout-content>
    <a-layout-footer>
      <r-footer :has-locations="true"></r-footer>
    </a-layout-footer>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data () {
    return {
      collapsed: false
    }
  },
  computed: mapGetters({
    isDark: 'base/isDark'
  })
}
</script>

<style>
#components-layout-demo-side .logo {
  height: 32px;
  background: rgba(255, 255, 255, 0.2);
  margin: 16px;
}
</style>
