<template>
  <a-row type="flex" justify="center">
    <a-col :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[24,24]" v-if="hasStores && !processes.isTray" type="flex" justify="start" align="middle">
        <a-col
          v-for="(store, index) in stores.data"
          :key="index" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
               :lg="{ span: 8 }"
        >
          <r-store-item :size="138" :store="store"></r-store-item>
        </a-col>
        <a-col v-if="!hasStores" :span="24">
          <a-empty image="/images/icon_pattern_grey.svg"
                   description="No stores were found! Please try other store categories."
          />
        </a-col>
      </a-row>
      <r-spinner :is-absolute="true" process="isCategories" v-if="processes.isRunning"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-list',
  components: {},
  props: {},
  data () {
    return {
      params: null,
      selectedCategoryId: null,
      defaultCategory: { id: 0, label: 'Filter by category' }
    }
  },
  computed: mapGetters({
    store: 'base/store',
    stores: 'base/stores',
    categories: 'base/storeCategories',
    hasStores: 'base/hasStores',
    processes: 'base/processes',
    search: 'base/search',
  }),
  created () {
    this.payload()
  },
  methods: {
    async payload () {
      await this.fetchStoreCategories()
    },
    async fetchStores () {
      await this.$store.dispatch('base/onStores', this.params)
    },
    async fetchStoreCategories () {
      let params = {
        type: 1,
        store_id: 0,
      }
      await this.$store.dispatch('base/onStoreCategories', params)
    },
    onFilter (option) {
      this.params = this.search.params
      this.params.category_id = option.key
      this.fetchStores()
    },
    async onStore (store) {
      await this.$store.dispatch('base/onNotice', 'Enjoy your shopping at ' + store.name)
      await this.$store.dispatch('shop/onStore', store.route)
    },
  }
}
</script>
