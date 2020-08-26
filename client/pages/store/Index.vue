<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <r-store-window :columns="6"
                      :category="category">
      </r-store-window>
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
  async asyncData({store, params, query}) {
    console.log('>>>> params', params);
    console.log('>>>> query', query);

    let route = `/store/all/category/${params.category}`;
    params.route = route;
    params.with = ['stores'];
    await store.dispatch('base/onCategory', params);

    console.log(route, 'route');
  },
  data() {
    return {}
  },
  computed: mapGetters({
    categories: 'base/categories',
    category: 'base/category',
    processes: 'base/processes',
    hasStores: 'base/hasStores'
  }),
  created() {
  },
  methods: {}
};
</script>⏎
