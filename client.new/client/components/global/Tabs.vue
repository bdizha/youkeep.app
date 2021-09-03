<template>
  <a-tabs v-model="selectedKey" type="card">
    <a-tab-pane key="customer" tab="For Customers"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-tab-pane>
    <a-tab-pane key="seller" tab="For Merchants"
    >
      <r-seller-steps :size="16"></r-seller-steps>
    </a-tab-pane>
    <a-tab-pane key="shopper" tab="For Shoppers"
    >
      <r-shopper-steps :size="16"></r-shopper-steps>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    title: { type: String, required: false, default: 'Spazamall connects shoppers to sellers.' },
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
