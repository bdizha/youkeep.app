<template>
  <r-products :columns="8" :filters="filters"></r-products>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-collected',
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
        event_type: 'created',
        sort: 0,
        page: 3
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
