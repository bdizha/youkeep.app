<template>
  <r-store-menu :is-category="true" :is-store="true"></r-store-menu>
</template>
<script>
import { mapGetters } from 'vuex'

const DISCOUNTS = [10, 15, 20, 25, 30]
const BRANDS = [10, 15, 20, 25, 30]
const FILTERS = {
  discounts: [],
  brands: []
}
export default {
  name: 'r-category-menu',
  props: {},
  data () {
    return {
      hasData: false,
      hasBrands: true,
      hasDiscounts: true,
      discounts: DISCOUNTS,
      brands: BRANDS
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    menuCategory: 'base/menuCategory',
    hasMenuCategory: 'base/hasMenuCategory',
    hasStore: 'shop/hasStore',
    category: 'base/category',
    hasCategory: 'base/hasCategory',
    filters: 'base/filters',
    hasCategories: 'base/hasCategories'
  }),
  created () {
  },
  mounted () {
    this.hasData = true
  },
  methods: {
    payload () {

    },
    onSlot () {
      console.log('onSlot')
    },
    onFilter () {
      this.$store.commit('onFilter', this.filters)
    },
    onChange (value) {
      console.log('change: ', value)
    },
    onAfterChange (value) {
      console.log('afterChange: ', value)
    },
    onClear () {
      this.filterDiscounts = []
      this.filterBrands = []

      console.log('onClear : filterDiscounts', this.filterDiscounts)
      console.log('onClear : filterBrands', this.filterBrands)
    },
    formatter (value) {
      return 'R' + value
    }
  },
  watch: {}
}
</script>
