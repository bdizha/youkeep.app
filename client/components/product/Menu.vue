<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-item v-if="hasStore" :store="store"></r-store-item>
      <a-collapse default-active-key="1" expandIconPosition="right">
        <a-collapse-panel v-if="hasCategories" class="r-collapse-panel"
                          key="1"
                          header="Recent categories">
          <r-category-filter-category></r-category-filter-category>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel"
                          key="2"
                          header="You may also like">
          <r-store-list></r-store-list>
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
  name: 'r-product-menu',
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
    hasStore: 'base/hasStore',
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

