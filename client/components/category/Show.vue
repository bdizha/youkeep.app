<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col v-if="hasData" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-gradient r-p-12" :class="{'r-hide-lg': !hasCategories}">
        <r-search class="r-hide-lg r-ph-12" :class="{'r-pb-12': hasCategories}"></r-search>
        <r-category-arrows v-if="hasCategories"></r-category-arrows>
      </div>
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
      <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <div class="r-margin-out-sm">
            <r-category-slider :category="category"></r-category-slider>
            <r-product-flush :columns="3"></r-product-flush>
          </div>
        </a-col>
      </a-row>
      <r-product-list :category="category" :columns="columns"></r-product-list>
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <div class="r-margin-out">
            <r-category-list :columns="6"></r-category-list>
          </div>
        </a-col>
      </a-row>
      <r-category-actions v-if="hasCategories"></r-category-actions>
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
    let route = this.$route.path;

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
    hasCategories: 'base/hasCategories',
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
