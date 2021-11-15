<template>
  <a-tabs v-model="selectedKey" type="card">
    <a-tab-pane key="created">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="appstore" />
        Created (13)
      </span>
      <r-store-assets></r-store-assets>
    </a-tab-pane>
    <a-tab-pane key="about">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="idcard" />
        About
      </span>
      <a-card class="r-bg-dark r-text-left">
        <r-store-about :store="store"></r-store-about>
      </a-card>
    </a-tab-pane>
    <a-tab-pane key="timeline">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="clock-circle" />
        Timeline
      </span>
      <r-store-timeline></r-store-timeline>
    </a-tab-pane>
    <a-tab-pane key="offers">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="thunderbolt" />
        Offers (17)
      </span>
      <r-store-offers></r-store-offers>
    </a-tab-pane>
    <a-tab-pane key="collected">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="pushpin" />
        Collected
      </span>
      <r-store-assets></r-store-assets>
    </a-tab-pane>
    <a-tab-pane key="air-drops">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="rocket" />
        Air drops
      </span>
      <r-store-drops></r-store-drops>
    </a-tab-pane>
    <a-tab-pane key="starred">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="star" />
        Starred (0)
      </span>
      <r-store-inspired></r-store-inspired>
    </a-tab-pane>
    <a-tab-pane v-if="false" key="series">
      <span slot="tab" :force-render="true">
        <a-icon theme="filled" type="tags" />
        Series (3)
      </span>
      <r-store-series></r-store-series>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-store-tabs',
  props: {
    activeKey: { type: String, required: false, default: 'created' }
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
      store: 'shop/store',
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
