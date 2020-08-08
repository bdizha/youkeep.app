<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row r-filter-cards" :span="24">
      <a-collapse default-active-key="1" expandIconPosition="right">
        <a-collapse-panel :key="1" class="r-category-menu-panel" header="Brands">
          <a-row class="r-margin-vertical-12" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
              <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                <a-row type="flex" justify="center">
                  <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                    <a-checkbox :value="discount/100">More Than {{
                      discount
                      }}%
                    </a-checkbox>
                  </a-col>
                </a-row>
              </a-checkbox-group>
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel :key="2" class="r-category-menu-panel" header="Price">
          <a-row class="r-margin-vertical-12" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
              <a-slider
                  range
                  tooltip-placement="bottom"
                  :tooltip-visible="true"
                  :tip-formatter="formatter"
                  :max="1500"
                  :min="10"
                  :step="50"
                  :default-value="[100, 750]"
                  @change="onChange"
                  @afterChange="onAfterChange"
              />
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel :key="3" class="r-category-menu-panel" header="Size">
          <a-row class="r-margin-vertical-12" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
              <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                <a-row type="flex" justify="center">
                  <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                    <a-checkbox :value="discount/100">More Than {{
                      discount
                      }}%
                    </a-checkbox>
                  </a-col>
                </a-row>
              </a-checkbox-group>
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel :key="4" class="r-category-menu-panel" header="Colors">
          <a-row class="r-margin-vertical-12" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
              <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                <a-row type="flex" justify="center">
                  <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                    <a-checkbox :value="discount/100">More Than {{
                      discount
                      }}%
                    </a-checkbox>
                  </a-col>
                </a-row>
              </a-checkbox-group>
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel :key="5" class="r-category-menu-panel" header="Discounts">
          <a-row class="r-margin-vertical-12" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
              <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                <a-row type="flex" justify="center">
                  <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                    <a-checkbox :value="discount/100">More Than {{
                      discount
                      }}%
                    </a-checkbox>
                  </a-col>
                </a-row>
              </a-checkbox-group>
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel :key="6" class="r-category-menu-panel" header="Categories">
          <r-category-menu v-if="hasCategories"></r-category-menu>
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
  name: 'r-category-filters',
  props: {},
  data() {
    return {
      hasData: true,
      hasBrands: true,
      hasDiscounts: true,
      discounts: DISCOUNTS,
      brands: BRANDS
    };
  },
  computed: mapGetters({
    store: 'shop/store',
    filters: 'shop/filters',
    hasProducts: 'shop/hasProducts',
    hasCategories: 'shop/hasCategories',
    category: 'shop/category'
  }),
  created() {
  },
  methods: {
    payload(category) {

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