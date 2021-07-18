<template>
  <a-row class="r-breadcrumbs">
    <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-ph-24 r-pv-12"
    >
      <a-breadcrumb v-if="!processes.isCategories">
        <a-icon slot="separator" type="right"/>
        <a-breadcrumb-item :key="0">
          <nuxt-link v-if="hasStore"
                     :to="store.route"
          >
            {{ store.name }}
          </nuxt-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item v-for="(breadcrumb, index) in breadcrumbs"
                           :key="index"
        >
          <nuxt-link :to="breadcrumb.route">
            {{ breadcrumb.name }}
          </nuxt-link>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-breadcrumbs',
  props: {
    breadcrumbs: { type: Array, required: true, default: () => [] },
    hasClass: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {

    }
  }
}
</script>
