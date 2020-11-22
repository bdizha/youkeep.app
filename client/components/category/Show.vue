<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-actions></r-category-actions>
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-slider :category="category"></r-category-slider>
        </a-col>
      </a-row>
      <r-product-flush :columns="3"></r-product-flush>
      <r-product-list :columns="columns"></r-product-list>
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-list :columns="6"></r-category-list>
        </a-col>
      </a-row>
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
  async fetch() {
    console.log('category params', this.$route.params);
    let route = `/store/${this.$route.params.store}/category/${this.$route.params.category}`;

    console.log('route', route);

    params.route = route;
    params.with = ['category', 'breadcrumbs', 'categories'];
    await store.dispatch('shop/onCategory', params);
  },
  data() {
    return {
      hasData: false,
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
  mounted() {
    this.hasData = true;
  },
  methods: {
    payload() {
    }
  }
};
</script>
