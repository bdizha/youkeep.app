<template>
  <r-store-template :category="{categories: []}">
    <a-row type="flex" justify="center" align="middle">
      <a-col class="gutter-row" :span="24">
        <r-store-slider></r-store-slider>
        <r-store-slider></r-store-slider>
        <r-store-slider></r-store-slider>
        <r-store-slider></r-store-slider>
        <a-empty v-show="!hasStores"
                 image="/assets/icon_grey.svg"
                 description="This store is coming soon. Please try other available stores."/>
      </a-col>
    </a-row>
  </r-store-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
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
    processes: 'base/processes',
    hasStores: 'base/hasStores',
    category: 'shop/category',
  }),
  created() {
    // this.payload();
  },
  methods: {
    async payload() {
      await this.$store.dispatch('shop/onStore', this.$route.path);
    }
  }
};
</script>⏎
