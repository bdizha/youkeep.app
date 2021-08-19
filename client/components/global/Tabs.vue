<template>
  <a-tabs v-model="selectedKey" type="card">
    <a-tab-pane key="auto" tab="Auto Invest"
    >
      <r-plan-auto :size="16"></r-plan-auto>
    </a-tab-pane>
    <a-tab-pane key="core" tab="Core Invest"
    >
      <r-plan-core :size="16"></r-plan-core>
    </a-tab-pane>
    <a-tab-pane key="prime" tab="Prime Invest"
    >
      <r-plan-prime :size="16"></r-plan-prime>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    title: { type: String, required: false, default: 'Brickcent connects investors to property.' },
    activeKey: { type: String, required: false, default: 'customer' }
  },
  data () {
    return {
      selectedKey: this.activeKey
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
