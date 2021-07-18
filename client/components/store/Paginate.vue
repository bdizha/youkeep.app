<template>
  <a-row align="middle" class="r-store-row" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-pagination v-if="hasStores" v-model="stores.current_page" :page-size="stores.per_page"
                    :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                    :total="stores.total"
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
    stores: 'base/stores',
    store: 'base/store',
    search: 'base/search',
    hasStores: 'base/hasStores',
  }),
  methods: {
    onChange (pageNumber, pageSize) {
      console.log('pageNumber ::: ', pageNumber)
      console.log('pageSize ::: ', pageSize)

      let params = this.search.params
      params.page = pageNumber
      this.fetchStores()
    },
    async fetchStores () {
      await this.$store.dispatch('base/onStores', this.params)
    }
  },
}
</script>
