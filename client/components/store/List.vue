<template>
  <a-row type="flex" justify="center">
    <a-col :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[12,12]" v-if="hasStores && !processes.isTray" type="flex" justify="start" align="middle">
        <a-col
          v-for="(store, index) in stores.data"
          :class="{'r-last_item': index == totalCount - 1 }"
          :test="hasStores"
          :key="index" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-store-item :size="90" :store="store"></r-store-item>
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
  computed: {
    totalCount () {
      let totalCount = 0
      if (this.hasStores) {
        totalCount = this.stores.data.length
      }
      return totalCount
    },
    ...mapGetters({
      store: 'base/store',
      stores: 'base/stores',
      categories: 'base/storeCategories',
      hasStores: 'base/hasStores',
      processes: 'base/processes',
      search: 'base/search'
    })
  },
  created () {
    this.payload()
  },
  methods: {
    async payload () {
      await this.fetchStoreCategories()
      await this.fetchStores()
    },
    async fetchStores () {
      await this.$store.dispatch('base/onStores', this.params)
    },
    async fetchStoreCategories () {
      const params = {
        type: 1,
        store_id: 0
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
    }
  }
}
</script>
