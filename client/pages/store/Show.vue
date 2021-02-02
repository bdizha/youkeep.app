<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-gradient r-p-12" :class="{'r-hide-lg': !hasCategories}">
        <r-search class="r-hide-lg r-ph-12" :class="{'r-pb-12': hasCategories}"></r-search>
        <r-category-arrows v-if="hasCategories"></r-category-arrows>
      </div>
      <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <div class="r-margin-out-sm">
            <r-store-catalog :columns="3" :span="3"></r-store-catalog>
            <r-product-flush :columns="3"></r-product-flush>
          </div>
        </a-col>
      </a-row>
      <a-row class="r-mt-24" type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-list :columns="6"></r-category-list>
        </a-col>
      </a-row>
      <r-store-popover :store="store"></r-store-popover>
      <r-category-actions v-if="hasCategories"></r-category-actions>
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
        limit: process.env.APP_LIMIT,
        with: ['breadcrumbs', 'photos', 'products']
      };
      await store.dispatch('base/onCategories', payload);

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
    hasCategories: 'base/hasCategories'
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
