<template>
  <a-tabs class=" r-text-center" v-model="selectedKey" type="card">
    <a-tab-pane key="shopper" tab="Shoppers"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-tab-pane>
    <a-tab-pane key="seller" tab="Sellers"
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
