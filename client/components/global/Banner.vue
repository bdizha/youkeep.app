<template>
  <div class="r-banner">
    <r-product-flush v-if="hasCategories" :columns="1" :category="categories[0]"></r-product-flush>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-banner',
  props: {},
  data() {
    return {
    }
  },
  computed: mapGetters({
    categories: 'shop/categories',
    hasCategories: 'shop/hasCategories',
    processes: 'base/processes',
  }),
  methods: {}
};
</script>
