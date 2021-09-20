<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-store-categories></r-store-categories>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  name: 'r-store',
  props: {},
  async asyncData ({ store, params, query }) {
    console.log('>>>> params', params)
    console.log('>>>> query', query)

    const route = `/stores`
    params.route = route
    params.with = ['stores']
    await store.dispatch('base/onStoreCategories', params)

    console.log(route, 'route')
  },
  data () {
    return {}
  },
  computed: mapGetters({
  }),
  created () {
  },
  methods: {}
}
</script>⏎
