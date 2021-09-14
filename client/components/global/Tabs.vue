<template>
  <a-card class="r-pull-h-24 r-border-none" :class="getBgClass">
    <div class="r-mv-48 r-text-center">
      <a-tabs v-model="selectedKey" type="card">
        <a-tab-pane key="buyer" :tab="activeKey"
        >
          <r-customer-steps :size="16"></r-customer-steps>
        </a-tab-pane>
        <a-tab-pane key="marketplace" tab="Marketplace"
        >
          <r-shopper-steps :size="16"></r-shopper-steps>
        </a-tab-pane>
        <a-tab-pane key="supplier" tab="For Farmers"
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
    title: { type: String, required: false, default: 'Spazaland connects shoppers to sellers.' },
    activeKey: { type: String, required: false, default: 'customer' }
  },
  data () {
    return {
      selectedKey: this.activeKey,
      themes: {
        buyer: 'primary',
        marketplace: 'secondary',
        supplier: 'primary'
      }
    }
  },
  computed: {
    theme () {
      return this.themes[this.selectedKey]
    },
    getBgClass () {
      return `r-bg-${this.theme}-light`
    }
  },
  methods: {
    onChange (activeKey) {
      this.selectedKey = activeKey
    }
  }
}
</script>
