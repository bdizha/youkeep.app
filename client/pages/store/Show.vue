<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-actions></r-category-actions>
    </a-col>
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-slider></r-category-slider>
      <r-category-list :limit="3"></r-category-list>
      <a-empty v-show="!hasCategories"
               image="/assets/icon_grey.svg"
               description="This store is coming soon. Please try other available stores."/>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-actions></r-category-actions>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  layout: 'shop',
  components: {},
  props: {},
  async asyncData({store, params, query}) {
    try {
      let route = `/store/${params.slug}`;
      await store.dispatch('shop/onStore', route);

      let payload = {
        store: params.slug,
        level: 1,
        limit: 2,
        with: ['breadcrumbs', 'photos', 'products', 'categories.products']
      };
      await store.dispatch('shop/onCategories', payload);

    } catch (e) {
      console.error('onStore errors');
      console.log(e);
    }
  },
  data() {
    return {
      isProcessing: true,
      hasData: false,
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: 'base/processes',
    hasCategories: 'shop/hasCategories'
  }),
  created() {
    this.payload();
  },
  methods: {
    async payload() {
    }
  }
};
</script>
