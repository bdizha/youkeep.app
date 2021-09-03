<template>
  <a-row align="middle" class="r-mv-24" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-slider :default-value="[100,2000]"
                :included="false"
                :max="price.max"
                :min="price.min"
                :tip-formatter="formatter"
                range
      />
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-filter-price',
  props: {},
  data () {
    return {
      price: {
        max: 2400,
        min: 33
      }
    }
  },
  computed: mapGetters({
    filters: 'base/filters'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    formatter (value) {
      return `R${value}`
    },
    async onFilter () {
      this.filters.price_min = 15
      this.filters.price_max = 2000000
      await this.$store.dispatch('base/onFilters', this.filters)
      await this.onProducts()
    },
    async onProducts () {
      await this.$store.dispatch('base/onProducts', this.payload)
    }
  }
}
</script>
