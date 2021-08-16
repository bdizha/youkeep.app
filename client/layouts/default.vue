<template>
  <a-layout class="r-layout__default">
    <r-header :is-icon="false"></r-header>
    <a-layout-content :class="{'r-layout-content': true}">
      <a-row :gutter="[48,0]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <nuxt/>
        </a-col>
        <a-col v-if="hasFooter" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-footer :has-locations="true"></r-footer>
        </a-col>
      </a-row>
    </a-layout-content>
    <r-spinner :is-absolute="false"></r-spinner>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({}),
  async serverPrefetch  () {
    await this.$store.dispatch('base/onIsDark', false)
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
