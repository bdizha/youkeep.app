<template>
  <a-tabs class=" r-text-center" v-model="selectedKey" type="card">
    <a-tab-pane key="customer" tab="Customer"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-tab-pane>
    <a-tab-pane key="artists" tab="Artists"
    >
      <r-artist-steps :size="16"></r-artist-steps>
    </a-tab-pane>
    <a-tab-pane key="sellers" tab="Sellers"
    >
      <r-seller-steps :size="16"></r-seller-steps>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    activeKey: { type: String, required: false, default: 'buyer' }
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
    }
  },
  methods: {
    onChange (activeKey) {
      this.selectedKey = activeKey
    }
  }
}
</script>
