<template>
  <r-products :columns="8" :is-drop="true" :filters="filters"></r-products>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-drops',
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
        event_type: 'inspired',
        sort: 0,
        page: 5
      }
    },
    ...mapGetters({
      store: 'base/store',
      hasStore: 'base/hasStore'
    })
  },
  mounted () {
  },
  methods: {
  }
}
</script>
