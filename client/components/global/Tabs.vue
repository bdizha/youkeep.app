<template>
  <a-tabs type="card" v-model="activeKey">
    <a-tab-pane key="customer" tab="For Customers"
    >
      <r-customer-steps></r-customer-steps>
    </a-tab-pane>
    <a-tab-pane key="merchant" tab="For Merchants"
    >
      <r-merchant-steps></r-merchant-steps>
    </a-tab-pane>
    <a-tab-pane key="shopper" tab="For Shoppers"
    >
      <r-shopper-steps></r-shopper-steps>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    activeKey: { type: String, required: false, default: 'customer' }
  },
  data () {
    return {
      activeTab: 'customer'
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
