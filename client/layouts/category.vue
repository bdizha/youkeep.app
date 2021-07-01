<template>
  <a-layout class="r-layout__store">
    <r-header></r-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible
    >
      <r-category-menu></r-category-menu>
    </a-layout-sider>
    <a-layout-content class="r-layout-content__store" :class="{'r-spin__active' :processes.isFixed}">
      <nuxt/>
    </a-layout-content>
    <r-bottom></r-bottom>
    <r-spinner :is-absolute="false"></r-spinner>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    collapsed: false,
  }),
  computed: mapGetters({
    processes: 'base/processes'
  }),
  mounted () {
  },
  methods: {}
}
</script>
