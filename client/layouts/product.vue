<template>
  <a-layout class="r-layout__store">
    <r-store-header></r-store-header>
    <a-layout-content :class="{'r-has-data': true}">
      <nuxt />
    </a-layout-content>
    <r-bottom></r-bottom>
  </a-layout>
</template>
<script>
import {mapGetters} from 'vuex'

export default {
  data: () => ({
    collapsed: true,
  }),
  computed: mapGetters({
    processes: 'base/processes'
  }),
  mounted() {
  },
  methods: {}
}
</script>
