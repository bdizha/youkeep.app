<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <a-row :gutter="[48,48]" class="r-slider" justify="center" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" class="r-slider" justify="start" type="flex">
            <a-col :span="24" class="r-text-center">
              <h3 class="r-heading r-text-white">
                {{ title }}
              </h3>
            </a-col>
            <a-col :span="24" class="r-spin-holder">
              <a-tabs v-model="selectedKey" type="card">
                <a-tab-pane v-for="(serve) in serves"
                            :key="serve.slug"
                            :category="serve"
                            :tab="serve.name"
                >
                  <r-store-slider :filters="{serve_id: serve.id}"></r-store-slider>
                </a-tab-pane>
              </a-tabs>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-serve-tabs',
  props: {
    title: { type: String, required: false, default: 'Explore by category' },
    activeKey: { type: String, required: false, default: 'all-nfts' }
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
