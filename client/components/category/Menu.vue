<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-item v-if="hasStore" :store="store"></r-store-item>
      <a-collapse default-active-key="1" expandIconPosition="right">
        <a-collapse-panel v-if="hasCategory" class="r-collapse-panel" key="1" header="Price">
          <r-category-filter-price></r-category-filter-price>
        </a-collapse-panel>
        <a-collapse-panel v-if="hasCategory" class="r-collapse-panel" v-for="(filter, index) in category.filters"
                          :key="filter.name"
                          :header="filter.name">
          <r-category-filter-item :filter="filter"></r-category-filter-item>
        </a-collapse-panel>
      </a-collapse>
      <r-category-filter-category></r-category-filter-category>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

const DISCOUNTS = [10, 15, 20, 25, 30];
const BRANDS = [10, 15, 20, 25, 30];
const FILTERS = {
  discounts: [],
  brands: []
};
export default {
  name: 'r-category-menu',
  props: {},
  data() {
    return {
      hasData: false,
      hasBrands: true,
      hasDiscounts: true,
      discounts: DISCOUNTS,
      brands: BRANDS
    };
  },
  computed: mapGetters({
    store: 'base/store',
    menuCategory: 'base/menuCategory',
    hasMenuCategory: 'base/hasMenuCategory',
    hasStore: 'base/hasStore',
    category: 'base/category',
    hasCategory: 'base/hasCategory',
    filters: 'base/filters',
    hasCategories: 'base/hasCategories',
  }),
  created() {
  },
  mounted() {
    this.hasData = true;
  },
  methods: {
    payload() {

    },
    onSlot() {
      console.log('onSlot');
    },
    onFilter() {
      this.$store.commit('onFilter', this.filters);
    },
    onChange(value) {
      console.log('change: ', value);
    },
    onAfterChange(value) {
      console.log('afterChange: ', value);
    },
    onClear() {
      this.filterDiscounts = [];
      this.filterBrands = [];

      console.log('onClear : filterDiscounts', this.filterDiscounts);
      console.log('onClear : filterBrands', this.filterBrands);
    },
    formatter(value) {
      return 'R' + value;
    },
  },
  watch: {},
};
</script>

