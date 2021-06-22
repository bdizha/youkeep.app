<template>
  <a-row type="flex r-store-item-line" justify="center" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-auto-complete
        size="default"
        style="width: 100%"
        :placeholder="'Search or switch your store...'"
        option-label-prop="title"
        @search="handleSearch"
      >
        <a-input>
          <a-icon slot="prefix" type="search"/>
        </a-input>
      </a-auto-complete>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-search',
  props: {},
  data () {
    return {
      params: null
    }
  },
  computed: mapGetters({
    store: 'base/store',
    search: 'base/search',
  }),
  methods: {
    handleSearch (value) {
      if (value) {
        this.onSearch(value)
      }
    },
    async fetchStores () {
      await this.$store.dispatch('base/onStores', this.params)
    },
    async onSearch (term) {
      this.params = this.search.params
      this.params.term = term

      await this.fetchStores()
    }
  },
}
</script>
