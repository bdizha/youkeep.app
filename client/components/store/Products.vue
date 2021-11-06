<template>
  <r-products :columns="8" :filters="filters"></r-products>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
  name: 'r-store-products',
  components: {},
  data () {
    return {
    }
  },
  computed: {
    filters () {
      return {
        limit: process.env.APP_LIMIT,
        store_id: this.hasStore ? this.store.id : null,
        sort: null,
        page: 1
      }
    },
    ...mapGetters({
      store: 'shop/store',
      hasStore: 'shop/hasStore',
      processes: 'base/processes',
      hasCategories: 'base/hasCategories'
    })
  },
  mounted () {
  },
  methods: {
  }
}
</script>
