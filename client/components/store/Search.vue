<template>
  <a-row align="middle" justify="center" type="flex r-store-item-line">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-auto-complete
        :placeholder="'Search or switch your store...'"
        option-label-prop="title"
        size="large"
        style="width: 100%"
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
    async fetchfarmers () {
      await this.$store.dispatch('base/onfarmers', this.params)
    },
    async onSearch (term) {
      this.params = this.search.params
      this.params.term = term

      await this.fetchfarmers()
    }
  },
}
</script>
