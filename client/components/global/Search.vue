<template>
  <div class="r-search-wrapper" style="width: 100%">
    <a-auto-complete
      :placeholder="placeholder"
      class="r-search"
      option-label-prop="title"
      size="large"
      style="width: 100%"
      @search="handleSearch"
    >
      <template slot="dataSource">
        <a-select-option v-for="item in search.data"
                         :key="item.route"
                         :title="item.title"
        >
          <nuxt-link :to="item.route" class="r-text-link">
            <div class="r-search-item-avatar">
              <a-avatar :size="36" :src="item.photo" class="r-lazy"
                        shape="circle"
                        src-placeholder="/assets/icon_default.png"
              />
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
          :size="size"
          class="r-btn-primary"
          style="margin-right: -12px"
          type="secondary"
        >
          <a-icon type="search"/>
        </a-button>
      </a-input>
    </a-auto-complete>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-search',
  props: {
    size: { type: String, required: false, default: 'large' }
  },
  data () {
    return {
      payload: {
        term: null,
        store_id: null
      }
    }
  },
  computed: {
    placeholder () {
      return 'Search products ' + (this.hasStore ? ' at ' + this.store.name : '') + '...'
    },
    ...mapGetters({
      store: 'base/store',
      search: 'shop/search',
      hasStore: 'base/hasStore',
      hasSearched: 'shop/hasSearched',
      processes: 'base/processes'
    })
  },
  methods: {
    handleSearch (value) {
      this.dataSource = value ? this.onSearch(value) : []
    },
    async onSearch (term) {
      this.payload.term = term
      this.payload.store_id = this.hasStore ? this.store.id : null
      await this.$store.dispatch('shop/onSearch', this.payload)
    }
  },
}
</script>
