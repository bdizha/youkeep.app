<template>
  <a-row class="r-mv-12" :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col v-for="(color, index) in color.items"
           :key="index"
           :xs="{span: 6}" :sm="{span: 6}" :md="{span: 4}" :lg="{span: 3}">
      <div class="r-filter-item r-filter-color"
           :class="{'r-filter-item__active': currentColor == color}"
           @click="onColor(color)"
           :style="{backgroundColor: color.name }">
        {{ color.is_active }}
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapState} from "vuex";

export default {
  name: 'r-category-filter-color',
  props: {
    color: {type: Object, required: true, default: {}}
  },
  data() {
    return {
      currentColor: null,
      selected: []
    };
  },
  mounted() {
  },
  computed: mapState({
    // color: state => state.shop.filters.filter(item => item.type === 2)[0]
  }),
  methods: {
    onColor(color) {
      color.is_active = !color.is_active;
    }
  },
};
</script>
