<template>
  <r-drawer-template placement="left"
                     current="store-menu"
  >
    <r-menu></r-menu>
  </r-drawer-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-drawer-menu',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    user: 'auth/user',
    flush: 'base/flush',
    hasNotice: 'base/hasNotice',
  }),
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    },
  },
}
</script>
