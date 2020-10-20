<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-actions></r-category-actions>
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
      <r-category-slider :category="category"></r-category-slider>
      <r-product-flush :columns="3"></r-product-flush>
      <r-product-list :columns="columns"></r-product-list>
      <r-category-list :columns="6" :limit="2"></r-category-list>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-show',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6}
  },
  data() {
    return {
      hasData: true,
      isProcessing: false
    }
  },
  computed: mapGetters({
    category: 'shop/category',
    hasCategories: 'shop/hasCategories',
    processes: 'base/processes'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
