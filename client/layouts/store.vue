<template>
  <a-layout class="r-layout__store">
    <r-store-header :is-icon="false"></r-store-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible
    >
      <r-store-menu></r-store-menu>
    </a-layout-sider>
    <a-layout-content class="r-layout-content__store" :class="{'r-has-data': true}">
      <a-card class="r-bg-white r-border-none">
        <a-row :gutter="[96,96]" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <nuxt/>
          </a-col>
          <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-footer :has-locations="true"></r-footer>
          </a-col>
        </a-row>
      </a-card>
    </a-layout-content>
    <r-spinner :is-absolute="false"></r-spinner>
  </a-layout>

</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    collapsed: true
  }),
  computed: mapGetters({
    processes: 'base/processes'
  }),
  mounted () {
  },
  methods: {}
}
</script>
