<template>
  <a-row class="r-mv-12" :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-checkbox-group :class="{'r-filter-color': filter.type == 2}"
                        v-model="selected"
                        @change="onFilter">
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col v-for="(item, index) in filter.items"
                 :key="filter.id"
                 :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24 / filter.per_row }" :lg="{span: 24 / filter.per_row}">
            <a-checkbox :style="{background: filter.type == 2 ? item.name : 'transparent'}" :value="item.id">
              {{  filter.type == 2 ? null : item.name }}
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
  name: 'r-category-filter-item',
  props: {
    filter: {type: Object, required: true, default: {}}
  },
  data() {
    return {
      selected: []
    };
  },
  computed: mapState({
    filters: 'shop/filters'
  }),
  mounted() {
  },
  methods: {
    onFilter() {
      this.$store.dispatch('shop/onFilters', this.selected);
    },
  },
};
</script>
