<template>
  <r-offers :columns="4" :filters="filters"></r-offers>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-offers',
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
        sort: 0,
        page: 1
      }
    },
    ...mapGetters({
      store: 'shop/store',
      hasStore: 'base/hasStore'
    })
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
