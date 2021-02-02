<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-item v-if="hasStore" :store="store"></r-store-item>
      <a-collapse default-active-key="1" expandIconPosition="right">
        <a-collapse-panel class="r-collapse-panel" v-for="(filter, index) in filters"
                          :key="index"
                          :header="filter.name">
          <r-category-filter-brand v-if="filter.type === 5"></r-category-filter-brand>
          <r-category-filter-color v-if="filter.type === 2"></r-category-filter-color>
          <r-category-filter-size v-if="filter.type === 1"></r-category-filter-size>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel" :key="6" header="Categories">
          <r-category-filter v-if="hasCategories"></r-category-filter>
          <a-empty v-if="!hasCategories"
                   image="/assets/icon_grey.svg"
                   description="Comming soon!"/>
        </a-collapse-panel>
      </a-collapse>
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
    store: 'shop/store',
    hasStore: 'shop/hasStore',
    filters: 'shop/filters',
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

