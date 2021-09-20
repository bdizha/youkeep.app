<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }">
      <a-row v-if="hasSellers && !processes.isTray" :gutter="[12,12]" align="middle" justify="start" type="flex">
        <a-col
          v-for="(store, index) in sellers.data"
          :key="index"
          :class="{'r-last_item': index == totalCount - 1 }"
          :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :test="hasSellers"
          :xs="{ span: 24 }"
        >
          <r-store-item :size="90" :store="store"></r-store-item>
        </a-col>
        <a-col v-if="!hasSellers" :span="24">
          <a-empty description="No sellers were found! Please try other store categories."
                   image="/images/icon_pattern_grey.svg"
          />
        </a-col>
      </a-row>
      <r-spinner v-if="processes.isRunning" :is-absolute="true" process="isCategories"></r-spinner>
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
      if (this.hasSellers) {
        totalCount = this.stores.data.length
      }
      return totalCount
    },
    ...mapGetters({
      store: 'base/store',
      sellers: 'base/sellers',
      categories: 'base/storeCategories',
      hasSellers: 'base/hasSellers',
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
      await this.fetchsellers()
    },
    async fetchsellers () {
      await this.$store.dispatch('base/onSellers', this.params)
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
      this.fetchsellers()
    },
    async onStore (store) {
      await this.$store.dispatch('base/onNotice', 'Enjoy your business at ' + store.name)
      await this.$store.dispatch('shop/onStore', store.route)
    }
  }
}
</script>
