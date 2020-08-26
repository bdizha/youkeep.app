<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <r-category-arrows :size="75"></r-category-arrows>
      <r-category-slider></r-category-slider>
      <r-category-list :limit="1"></r-category-list>
      <r-category-arrows :size="36"></r-category-arrows>
      <a-empty v-show="!hasCategories"
               image="/assets/icon_grey.svg"
               description="This store is coming soon. Please try other available stores."/>
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
        store_slug: params.slug,
        level: 1,
        limit: 6,
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
