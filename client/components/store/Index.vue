<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }">
      <a-row v-if="hasStores" :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col
          v-for="(store, index) in stores.data"
          :key="index"
          :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 6 }" :xs="{ span: 12 }"
        >
          <r-store-face :store="store"></r-store-face>
        </a-col>
        <a-col v-if="!hasStores" :span="24">
          <a-empty description="No stores were found! Please try a different search criteria."
                   image="/images/icon_pattern_grey.svg"
          />
        </a-col>
      </a-row>
      <r-spinner v-if="processes.isFixed" :is-absolute="true" process="isFixed"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-stores',
  components: {},
  props: {},
  data () {
    return {
      params: null
    }
  },
  computed: {
    ...mapGetters({
      stores: 'content/stores',
      hasStores: 'content/hasStores',
      processes: 'base/processes',
      search: 'base/search'
    })
  },
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    },
    async fetchStores () {
      await this.$store.dispatch('content/onStores', this.params)
    },
    onFilter (option) {
      this.params = this.search.params
      this.params.category_id = option.key
      this.fetchStores()
    }
  }
}
</script>
