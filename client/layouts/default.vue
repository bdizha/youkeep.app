<template>
  <a-layout class="r-layout__default">
    <r-header></r-header>
    <a-layout-content :class="{'r-spin__active' :processes.isFixed}">
      <a-layout>
        <a-layout-content>
          <nuxt />
        </a-layout-content>
        <r-footer></r-footer>
      </a-layout>
      <r-spinner :is-absolute="false"></r-spinner>
    </a-layout-content>
    <r-bottom></r-bottom>
  </a-layout>
</template>
<script>
import {mapGetters} from 'vuex'

export default {
  data: () => ({}),
  created() {
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  methods: {}
}
</script>
