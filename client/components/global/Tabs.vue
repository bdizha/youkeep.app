<template>
  <a-card class="r-pull-h-24 r-border-none" :class="getCardBg()">
    <div class="r-mv-48 r-text-center">
      <a-tabs v-model="selectedKey" type="card">
        <a-tab-pane key="customer" tab="For Buyers"
        >
          <r-customer-steps :size="16"></r-customer-steps>
        </a-tab-pane>
        <a-tab-pane key="shopper" tab="Marketplace"
        >
          <r-shopper-steps :size="16"></r-shopper-steps>
        </a-tab-pane>
        <a-tab-pane key="supplier" tab="For Suppliers"
        >
          <r-seller-steps :size="16"></r-seller-steps>
        </a-tab-pane>
      </a-tabs>
    </div>
  </a-card>
</template>
<script>

export default {
  name: 'r-tabs',
  props: {
    title: { type: String, required: false, default: 'Spazamall connects shoppers to sellers.' },
    activeKey: { type: String, required: false, default: 'customer' },
    theme: { type: String, required: false, default: 'primary' }
  },
  data () {
    return {
      selectedKey: this.activeKey
    }
  },
  created () {
  },
  methods: {
    getCardBg () {
      return `r-bg-${this.theme}-light`
    }
  }
}
</script>
