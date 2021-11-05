<template>
  <a-row :gutter="[48,48]" class="r-slider" justify="start" type="flex">
    <a-col :span="24" class="r-text-center">
      <h3 class="r-heading r-text-white">
        {{ title }}
      </h3>
    </a-col>
    <a-col :span="24" class="r-spin-holder">
      <a-tabs v-model="selectedKey" type="card">
        <a-tab-pane v-for="(serve, index) in serves"
                    :key="index"
                    :category="serve"
                    :tab="serve.name"
        >
          <r-product-slider :filters="{category_id: null}"></r-product-slider>
        </a-tab-pane>
      </a-tabs>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-category-tabs',
  props: {
    title: { type: String, required: false, default: 'Trending in' },
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
      serves: 'content/serves',
      hasServes: 'content/hasServes'
    })
  },
  created () {
  },
  methods: {
    async onServes () {
      await this.$store.dispatch('content/onServes', this.filters)
    },
    onChange (activeKey) {
      this.selectedKey = activeKey
    }
  }
}
</script>
