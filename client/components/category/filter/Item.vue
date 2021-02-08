<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-checkbox-group :class="{'r-filter-color': filter.type == 2}"
                        v-model="selected"
                        @change="onFilter">
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col v-for="(item, index) in filter.items"
                 v-if="index < counter"
                 :key="filter.id"
                 :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24 / filter.per_row }" :lg="{span: 24 / filter.per_row}">
            <a-tooltip placement="top">
              <template slot="title">
                <span>Select: {{ item.name }}</span>
              </template>
              <a-checkbox :style="'background: ' + (filter.type == 2 ?  item.name : 'transparent')"
                          :value="item.id">
                {{ filter.type == 2 ? null : item.name }}
              </a-checkbox>
            </a-tooltip>
          </a-col>
        </a-row>
      </a-checkbox-group>
    </a-col>
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-row :gutter="[12, 12]" type="flex" justify="start" align="middle">
        <a-col v-if="counter < filter.items.length" :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
          <a-button
            block
            @click="onIncrement"
            class="r-btn-bordered-secondary"
            size="default"
            icon="plus-circle"
            type="secondary">
            More
          </a-button>
        </a-col>
        <a-col v-if="limit < counter" :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
          <a-button
            block
            @click="onDecrement"
            class="r-btn-bordered-primary"
            size="default"
            icon="minus-circle"
            type="secondary">
            Less
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapState} from "vuex";

export default {
  name: 'r-category-filter-item',
  props: {
    filter: {type: Object, required: true, default: {}},
    limit: {type: Number, required: true, default: 6},
  },
  data() {
    return {
      selected: [],
      counter: this.limit,
    };
  },
  computed: mapState({
    filters: 'base/filters'
  }),
  mounted() {

  },
  methods: {
    onFilter() {
      this.$store.dispatch('base/onFilters', this.selected);
    },
    onIncrement() {
      this.counter += this.limit;
    },
    onDecrement() {
      this.counter -= this.limit;
    },
  },
};
</script>
