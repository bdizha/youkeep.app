<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :span="24" class="gutter-row">
      <r-store-window :category="category"
                      :columns="6"
      >
      </r-store-window>
      <r-store-categories></r-store-categories>
      <a-empty v-show="!hassellers"
               description="This store is coming soon. Please try other available sellers."
               image="/images/icon_pattern_grey.svg"
      />
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'column',
  name: 'r-store',
  props: {},
  async asyncData ({ store, params, query }) {
    console.log('>>>> params', params)
    console.log('>>>> query', query)

    let route = `/store/all/category/${params.category}`
    params.route = route
    params.with = ['sellers']
    await store.dispatch('base/onCategory', params)

    console.log(route, 'route')
  },
  data () {
    return {}
  },
  computed: mapGetters({
    categories: 'base/categories',
    category: 'base/category',
    processes: 'base/processes',
    hassellers: 'base/hassellers'
  }),
  created () {
  },
  methods: {}
}
</script>⏎
