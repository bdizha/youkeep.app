<template>
  <r-assets :columns="6" :filters="filters"></r-assets>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
  name: 'r-store-assets',
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
