<template>
  <a-row class="r-store-row" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-pagination v-if="hasStores" class="r-same-height" v-model="stores.current_page"
                    :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                    :page-size="stores.per_page"
                    @change="onChange"
                    :total="stores.total"
                    show-less-items
      >
        <template slot="buildOptionText" slot-scope="props">
          <a-button class="r-btn-bordered-grey"
                    type="secondary" :size="'default'"
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
