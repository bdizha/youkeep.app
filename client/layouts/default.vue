<template>
  <a-layout class="r-layout__default">
    <r-header></r-header>
    <a-layout-content :class="{'r-has-data': true}">
      <a-layout>
        <a-layout-content>
          <nuxt />
        </a-layout-content>
      </a-layout>
      <r-footer></r-footer>
      <r-bottom></r-bottom>
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
