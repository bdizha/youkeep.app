<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <r-store-slider></r-store-slider>
      <r-store-slider></r-store-slider>
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
  async asyncData({store}) {
    let params = {
      category_id: null,
      limit: 24
    };

    await store.dispatch('base/onStores', params);
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
    stores: 'base/stores',
    processes: 'base/processes',
    hasStores: 'base/hasStores'
  }),
  created() {
  },
  methods: {}
};
</script>⏎
