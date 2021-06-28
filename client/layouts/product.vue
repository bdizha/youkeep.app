<template>
  <a-layout class="r-layout__store">
    <r-header></r-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible
    >
      <r-product-menu></r-product-menu>
    </a-layout-sider>
    <a-layout-content class="r-layout-content__store" :class="{'r-has-data': true}">
      <nuxt/>
    </a-layout-content>
    <r-bottom></r-bottom>
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
