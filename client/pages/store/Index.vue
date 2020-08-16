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
  async asyncData({store}) {
    let params = {
      category_id: null,
      limit: 24
    };

    await store.dispatch('base/onStores', params);
  },
  components: {
    name: 'r-store'
  },
  props: {},
  data() {
    return {
      isProcessing: true,
      hasData: false,
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    stores: 'base/stores',
    processes: 'base/processes',
    hasStores: 'base/hasStores',
    category: 'shop/category',
  }),
  created() {
  },
  methods: {
  }
};
</script>⏎
