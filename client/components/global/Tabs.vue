<template>
  <a-tabs type="card">
    <a-tab-pane key="1" tab="For Customers"
    >
      <r-customer-hiw></r-customer-hiw>
    </a-tab-pane>
    <a-tab-pane key="2" tab="For Merchants"
    >
      <r-merchant-hiw></r-merchant-hiw>
    </a-tab-pane>
    <a-tab-pane key="3" tab="For Shoppers"
    >
      <r-shopper-hiw></r-shopper-hiw>
    </a-tab-pane>
  </a-tabs>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    tab: { type: String, required: false, default: '1' }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
