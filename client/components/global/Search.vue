<template>
  <div class="r-search-wrapper" style="width: 100%">
    <a-auto-complete
      class="r-search"
      size="default"
      style="width: 100%"
      :placeholder="placeholder"
      option-label-prop="title"
      @search="handleSearch">
      <template slot="dataSource">
        <a-select-option v-for="item in search.data"
                         :key="item.route"
                         :title="item.title">
          <nuxt-link class="r-text-link" :to="item.route">
            <div class="r-search-item-avatar">
              <a-avatar class="r-lazy" shape="circle" :size="36"
                        :src="item.photo"
                        src-placeholder="/assets/icon_default.png"/>
            </div>
            {{ item.title }}
            <div class="r-search-item-icon">
              <a-icon type="clock-circle"/>
            </div>
            <span className="r-search-item-count">{{ item.count }} results</span>
          </nuxt-link>
        </a-select-option>
      </template>
      <a-input>
        <a-button
          slot="suffix"
          style="margin-right: -12px"
          class="search-btn"
          size="default"
          type="secondary">
          <a-icon type="search"/>
        </a-button>
      </a-input>
    </a-auto-complete>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-search',
  data() {
    return {};
  },
  computed: {
    placeholder() {
      return 'Search ' + (this.hasStore ? this.store.name : '') + '...';
    },
    ...mapGetters({
      store: 'shop/store',
      search: 'shop/search',
      hasStore: 'shop/hasStore',
      hasSearched: 'shop/hasSearched',
      processes: 'base/processes'
    })
  },
  methods: {
    handleSearch(value) {
      this.dataSource = value ? this.onSearch(value) : [];
    },
    async onSearch(term) {
      await this.$store.dispatch('shop/onSearch', {
        term: term,
        store_id: this.store.id
      });
    }
  },
};
</script>
