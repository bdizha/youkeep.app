<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-gradient r-ph-24 r-pt-12 r-pb-12-lg r-hide-lg">
        <r-search></r-search>
      </div>
      <r-category-actions v-if="hasCategories"></r-category-actions>
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
      <a-row v-if="hasCategories" type="flex" justify="start" align="middle">
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
          <div class="r-margin-out">
            <r-category-list :columns="6"></r-category-list>
          </div>
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
    let params = {};
    console.log('category params', this.$route);
    let route = this.$route.params.path;

    console.log('route', route);

    params.route = route;
    params.slug = this.$route.params.slug;
    params.with = [];
    await this.$store.dispatch('shop/onCategory', params);
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
