<template>
  <a-tabs v-model="selectedKey" type="card">
    <a-tab-pane key="collected" tab="Collected"
    >
      <r-store-products></r-store-products>
    </a-tab-pane>
    <a-tab-pane key="" tab="Air Drops"
    >
      <r-store-drops></r-store-drops>
    </a-tab-pane>
    <a-tab-pane key="created" tab="Created"
    >
      <r-store-products></r-store-products>
    </a-tab-pane>
    <a-tab-pane key="inspired" tab="Inspired"
    >
      <r-store-inspired></r-store-inspired>
    </a-tab-pane>
    <a-tab-pane key="timeline" tab="Timeline"
    >
      <r-store-timeline></r-store-timeline>
    </a-tab-pane>
    <a-tab-pane key="offers" tab="Offers"
    >
      <r-store-offers></r-store-offers>
    </a-tab-pane>
    <a-tab-pane key="series" tab="Series"
    >
      <r-store-series></r-store-series>
    </a-tab-pane>
    <a-tab-pane key="about" tab="About"
    >
      <a-card class="r-bg-dark r-text-left">
        <r-store-about :store="store"></r-store-about>
      </a-card>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-store-tabs',
  props: {
    activeKey: { type: String, required: false, default: 'artists' }
  },
  data () {
    return {
      selectedKey: this.activeKey,
      themes: {
        buyer: 'primary',
        marketplace: 'secondary',
        seller: 'secondary'
      }
    }
  },
  computed: {
    theme () {
      return this.themes[this.selectedKey]
    },
    getBgClass () {
      return `r-bg-white`
    },
    ...mapGetters({
      store: 'base/store',
      hasStore: 'base/hasStore'
    })
  },
  methods: {
    onChange (activeKey) {
      this.selectedKey = activeKey
    }
  }
}
</script>
