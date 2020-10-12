<template>
  <a-row type="flex" justify="center">
    <a-col class="gutter-row" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-store-item-line" type="flex" justify="start">
        <a-col class="gutter-row"
               :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
               style="text-align: right;">
          <a-select
            labelInValue
            :defaultValue="{key: defaultCategory.id}"
            size="default"
            @change="onFilter"
            style="min-width: 100%;">
            <a-select-option :value="defaultCategory.id">
              <a-icon type="control"/>
              {{ defaultCategory.label }}
            </a-select-option>
            <a-select-option v-for="(item, index) in categories"
                             :key="index"
                             :value="item.id">
                                <span class="r-sort-value">
                                    <a-icon type="appstore"/>
                                    {{ item.name }}
                                </span>
            </a-select-option>
          </a-select>
        </a-col>
      </a-row>
      <a-row v-if="hasStores && !processes.isTray" type="flex" justify="start">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
               v-for="(store, index) in stores.data"
               :key="index">
          <nuxt-link @click.native="onStore(store)" :to="store.route"
                     style="display: block; width: 100%;">
            <r-store-item :store="store"></r-store-item>
          </nuxt-link>
        </a-col>
        <a-col v-if="!hasStores" class="gutter-row" :span="24">
          <a-empty image="/assets/icon_grey.svg"
                   description="No stores were found! Please try other store categories."/>
        </a-col>
      </a-row>
      <r-spinner :is-absolute="true" v-if="processes.isRunning"></r-spinner>
      <a-row class="r-mv-48" type="flex" justify="center">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <p class="r-store-text-light">
            Shopple is an independent shopping service that is not necessarily affiliated with,
            endorsed or sponsored by the stores listed here but it enables you to get the deliveries
            you
            want.
          </p>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from 'vuex'

export default {
  name: 'r-store-list',
  components: {},
  props: {},
  data() {
    return {
      params: null,
      selectedCategoryId: null,
      defaultCategory: {id: 0, label: 'Filter by category'}
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    stores: 'base/stores',
    categories: 'base/storeCategories',
    hasStores: 'base/hasStores',
    processes: 'base/processes',
    search: 'base/search',
  }),
  created() {
    this.payload();
  },
  methods: {
    async payload() {
      await this.fetchStoreCategories();
    },
    async fetchStores() {
      await this.$store.dispatch('base/onStores', this.params);
    },
    async fetchStoreCategories() {
      let params = {
        type: 1,
        store_id: 0,
      };
      await this.$store.dispatch('base/onStoreCategories', params);
    },
    onFilter(option) {
      this.params = this.search.params;
      this.params.category_id = option.key;
      this.fetchStores();
    },
    async onStore(store) {
      await this.$store.dispatch('base/onNotice', "Enjoy your shopping at " + store.name);
      await this.$store.dispatch('shop/onStore', store.route);
    },
  }
};
</script>
