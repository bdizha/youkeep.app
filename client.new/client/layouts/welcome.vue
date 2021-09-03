<template>
  <a-layout class="r-layout__store">
    <r-header :is-icon="false"></r-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible
    >
      <r-menu></r-menu>
    </a-layout-sider>
    <a-layout-content class="r-layout-content__store" :class="{'r-spin__active' :processes.isFixed}">
      <a-row :gutter="[48,48]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <div class="r-p-24">
            <nuxt/>
          </div>
        </a-col>
        <a-col v-if="hasFooter" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-footer></r-footer>
        </a-col>
      </a-row>
    </a-layout-content>
    <r-spinner :is-absolute="false"></r-spinner>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    collapsed: false
  }),
  async serverPrefetch  () {
    await this.$store.dispatch('base/onIsDark', false)
  },
  computed: mapGetters({
    hasFooter: 'base/hasFooter',
    processes: 'base/processes'
  }),
  mounted () {
  },
  methods: {}
}
</script>
