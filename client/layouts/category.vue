<template>
  <a-layout class="r-layout__store">
    <r-store-header></r-store-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible>
      <r-category-menu></r-category-menu>
    </a-layout-sider>
    <a-layout-content class="r-layout-content__store" :class="{'r-has-data': true}">
      <nuxt />
    </a-layout-content>
  </a-layout>
</template>
<script>
import {mapGetters} from 'vuex'

export default {
  data: () => ({
    collapsed: false,
  }),
  computed: mapGetters({
    processes: 'base/processes'
  }),
  mounted() {
  },
  methods: {}
}
</script>
