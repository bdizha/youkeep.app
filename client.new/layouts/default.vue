<template>
  <a-layout class="r-layout__default">
    <r-header></r-header>
    <a-layout-content :class="{'r-spin__active' :false}">
      <a-layout>
        <a-layout-content class="r-bg-white">
          <a-row :gutter="[48,0]" justify="center" type="flex">
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
      </a-layout>
    </a-layout-content>
    <r-bottom></r-bottom>
    <r-spinner :is-absolute="false"></r-spinner>
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
