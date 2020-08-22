<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <r-store-categories></r-store-categories>
      <a-empty v-show="!hasStores"
               image="/assets/icon_grey.svg"
               description="This store is coming soon. Please try other available stores."/>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  layout: 'column',
  name: 'r-store',
  props: {},
  async asyncData({store, params}) {
    params.type = 1;
    params.limit = 3
    params.with = ['photos', 'breadcrumbs', 'stores', 'categories'];

    await store.dispatch('base/onCategories', params);
  },
  data() {
    return {}
  },
  computed: mapGetters({
    categories: 'base/categories',
    processes: 'base/processes',
    hasStores: 'base/hasStores'
  }),
  created() {
  },
  methods: {}
};
</script>⏎
