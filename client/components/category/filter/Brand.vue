<template>
  <a-row class="r-margin-vertical-12" :gutter="[12,12]" type="flex" justify="start">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-checkbox-group v-model="selected" @change="onFilter">
        <a-row type="flex" justify="start">
          <a-col v-for="(brand, index) in brand.items"
                 :key="brand.id"
                 :xs="{span: 24}" :sm="{span: 24}" :md="{span: 12}" :lg="{span: 12}">
            <a-checkbox :value="brand.id">
              {{ brand.name }}
            </a-checkbox>
          </a-col>
        </a-row>
      </a-checkbox-group>
    </a-col>
  </a-row>
</template>
<script>
import {mapState} from "vuex";

export default {
  name: 'r-category-filter-brand',
  data() {
    return {
      sizes: [],
      selected: []
    };
  },
  computed: mapState({
    brand: state => state.shop.filters.filter(item => item.type === 5)[0]
  }),
  mounted() {
  },
  methods: {
    onFilter() {
      // this.$store.dispatch('shop/onFilters', this.selected);
    },
  },
};
</script>
