<template>
  <a-row align="middle" class="r-store-row" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-pagination v-if="hasfarmers" v-model="farmers.current_page" :page-size="farmers.per_page"
                    :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                    :total="farmers.total"
                    class="r-same-height"
                    show-less-items
                    @change="onChange"
      >
        <template slot="buildOptionText" slot-scope="props">
          <a-button class="r-btn-bordered-grey"
                    size="large" type="secondary"
          >
            {{ props.value }}
          </a-button>
        </template>
      </a-pagination>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-paginate',
  data () {
    return {}
  },
  computed: mapGetters({
    farmers: 'base/farmers',
    store: 'base/store',
    search: 'base/search',
    hasfarmers: 'base/hasfarmers',
  }),
  methods: {
    onChange (pageNumber, pageSize) {
      console.log('pageNumber ::: ', pageNumber)
      console.log('pageSize ::: ', pageSize)

      let params = this.search.params
      params.page = pageNumber
      this.fetchfarmers()
    },
    async fetchfarmers () {
      await this.$store.dispatch('base/onfarmers', this.params)
    }
  },
}
</script>
