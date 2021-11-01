<template>
  <a-row :gutter="[48,48]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-product-list :columns="6" :filters="payload"></r-product-list>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'store',
  props: {},
  async asyncData ({ store, params, query }) {
    console.log('>>>> params', params)
    console.log('>>>> query', query)

    await store.dispatch('base/onProducts', params, { root: true })
  },
  data () {
    return {}
  },
  computed: {
    payload () {
      return {
        limit: process.env.APP_LIMIT,
        category_id: this.hasCategory ? this.category.id : null,
        sort: 0,
        page: 1,
        filters: [],
        category_ids: [],
        price_min: 0,
        price_max: null
      }
    },
    ...mapGetters({})
  },
  created () {
  },
  methods: {}
}
</script>⏎
