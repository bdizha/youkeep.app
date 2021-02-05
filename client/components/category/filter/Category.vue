<template>
  <a-row class="r-category-menu" :gutter="[0, 12]" type="flex" justify="start" align="middle">
    <a-col :span="24" :class="{'r-spin__active': processes.isCategories}">
      <r-category-menu-item v-for="(category, index) in categories"
                            :key="index"
                            :category="category"></r-category-menu-item>
      <r-spinner :is-absolute="true"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-filter-category',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    categories: 'base/categories',
    processes: 'base/processes',
    hasCategories: 'base/hasCategories',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
}
</script>
