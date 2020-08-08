<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <r-category-list></r-category-list>
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
    let route = `/store/${params.slug}`;
    await store.dispatch('shop/onStore', route);

    let payload = {
      store_slug: params.slug,
      level: 1,
      limit: 12,
      with: ['breadcrumbs', 'photos', 'products']
    };
    await store.dispatch('shop/onCategories', payload);
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
