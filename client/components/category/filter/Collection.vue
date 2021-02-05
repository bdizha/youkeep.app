<template>
  <a-row class="r-mv-12" :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-radio-group v-model="selected" @change="onFilter">
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col v-for="(collection, index) in collection.items"
                 :key="collection.id"
                 :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
            <div class="r-product-type">
              <a-radio :value="collection.id">
                {{ collection.name }}
              </a-radio>
            </div>
          </a-col>
        </a-row>
      </a-radio-group>
    </a-col>
  </a-row>
</template>
<script>
import {mapState} from "vuex";

export default {
  name: 'r-category-filter-collection',
  data() {
    return {
      sizes: [],
      selected: []
    };
  },
  computed: mapState({
    collection: state => state.shop.filters.filter(item => item.type === 5)[0]
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
