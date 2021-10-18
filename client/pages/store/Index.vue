<template>
  <a-row :gutter="[48,48]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-serve-slider></r-serve-slider>
    </a-col>
    <a-col v-if="false" v :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h3 class="r-heading">
            Top Deals
          </h3>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            Offers
          </a-button>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            In-store
          </a-button>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            Sort by: Relevancy
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-stores></r-stores>
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

    const route = `/stores`
    params.route = route
    params.with = ['stores']
    await store.dispatch('content/onStores', params)

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
