<template>
  <a-layout class="r-layout__default">
    <r-help-header></r-help-header>
    <a-layout-content class="r-layout-content">
      <a-row :gutter="[96,96]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" justify="center" type="flex">
            <a-col v-if="help.breadcrumbs.length > 0"
                   :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
            >
              <r-breadcrumbs prefix="/help" :breadcrumbs="help.breadcrumbs"
              ></r-breadcrumbs>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <nuxt/>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-contact-us title="Need more help? "></r-contact-us>
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

    await this.$store.dispatch('base/onIsHelp', true)
  },
  created () {
  },
  computed: mapGetters({
    hasFooter: 'base/hasFooter',
    help: 'article/help'
  }),
  methods: {}
}
</script>
