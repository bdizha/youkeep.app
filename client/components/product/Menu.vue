<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse default-active-key="store" expandIconPosition="right">
        <a-collapse-panel class="r-collapse-panel" key="store" header="You're shopping at">
          <r-store-item v-if="hasStore" :store="store"></r-store-item>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel" v-if="hasCategories"
                          key="categories"
                          header="Recent categories"
        >
          <r-category-filter-category></r-category-filter-category>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel"
                          key="stores"
                          header="You may also like"
        >
          <r-product-list v-if="hasStore" :filters="filters" :span="24" :vertical="false" :columns="1"></r-product-list>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-menu',
  props: {},
  data () {
    return {}
  },
  async fetch () {
    await this.onProducts()
  },
  computed: {
    filters () {
      return {
        limit: process.env.APP_LIMIT,
        store_id: this.hasStore ? this.store.id : null,
        sort: 0,
        page: 1
      }
    },
    ...mapGetters({
      store: 'base/store',
      hasStore: 'base/hasStore',
      hasCategories: 'base/hasCategories',
    })
  },
  created () {
  },
  mounted () {
  },
  methods: {
    async onProducts () {

      console.log('filters', this.filters)

      await this.$store.dispatch('base/onProducts', this.filters)
    },
    formatter (value) {
      return 'R' + value
    },
  },
}
</script>

