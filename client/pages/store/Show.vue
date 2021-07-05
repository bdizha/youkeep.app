<template>
  <r-category-show></r-category-show>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'shop',
  components: {},
  props: {},
  async asyncData ({ store, params, query }) {
    try {
      let route = `/store/${params.slug}`
      await store.dispatch('shop/onStore', route)

      let payload = {
        store: params.slug,
        level: 1,
        order_by: 'randomized_at',
        limit: process.env.APP_LIMIT,
        with: ['breadcrumbs', 'photos', 'products']
      }
      await store.dispatch('base/onCategories', payload)

    } catch (e) {
      console.error('onStore errors')
      console.log(e)
    }
  },
  data () {
    return {}
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
      processes: 'base/processes',
      hasCategories: 'base/hasCategories'
    })
  },
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    }
  }
}
</script>
