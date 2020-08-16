<template>
  <a-row class="r-mv-12" :gutter="[12,12]" type="flex" justify="start">
    <a-col v-for="(color, index) in color.items"
           :key="index"
           :xs="{span: 6}" :sm="{span: 6}" :md="{span: 4}" :lg="{span: 3}">
      <div class="r-filter-item r-filter-color"
           :class="{'r-filter-item__active': color.is_active}"
           @click="onColor(color)"
           :style="{backgroundColor: color.name }">
        <a-icon v-show="color.is_active"
                style="font-size: 18px;"
                type="check"/>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapState} from "vuex";

const COLORS = [
  '#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];

export default {
  name: 'r-category-filter-color',
  data() {
    return {
      colors: [],
      selected: []
    };
  },
  mounted() {
    COLORS.forEach((color, index) => {
      this.colors.push({value: color, key: index, is_active: false});
    });
  },
  computed: mapState({
    color: state => state.shop.filters.filter(item => item.type === 2)[0]
  }),
  methods: {
    onColor(color) {
      color.is_active = !color.is_active;
    }
  },
};
</script>
