<template>
  <a-layout class="r-layout__default">
    <r-header :is-icon="false"></r-header>
    <a-layout-content class="r-layout-content">
      <a-row :gutter="[48,0]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none r-pt-81">
          <nuxt/>
          </a-card>
        </a-col>
        <a-col v-if="hasFooter" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-footer :has-locations="false"></r-footer>
        </a-col>
      </a-row>
    </a-layout-content>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({}),
  async serverPrefetch  () {
    await this.$store.dispatch('base/onIsDark', true)
  },
  created () {
  },
  computed: mapGetters({
    hasFooter: 'base/hasFooter',
    processes: 'base/processes'
  }),
  methods: {}
}
</script>
