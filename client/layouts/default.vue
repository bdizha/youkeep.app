<template>
  <a-layout class="r-layout__default" :class="{'r-fixed-spin__active':processes.isFixed}">
    <r-header></r-header>
    <a-layout-content :class="{'r-has-data': true, 'r-fixed-spin__active':processes.isFixed}">
      <a-layout>
        <a-layout-content>
          <nuxt />
        </a-layout-content>
      </a-layout>
      <r-footer></r-footer>
      <r-bottom></r-bottom>
      <r-spinner processes="isFixed" :is-absolute="false"></r-spinner>
    </a-layout-content>
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
