<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
    <r-store-notice v-if="hasNotice"></r-store-notice>
    <r-store-face :is-plain="true" v-if="isStore && !isHome" :store="store"></r-store-face>
    <a-collapse accordion
                :default-active-key="activeKey"
                expandIconPosition="right">
      <a-collapse-panel v-if="isHome"
                        key="links"
                        class="r-collapse-panel"
                        header="Quick Links">
        <r-quick-links></r-quick-links>
      </a-collapse-panel>
      <a-collapse-panel v-if="isStore" key="delivery"
                        class="r-collapse-panel"
                        header="Delivery Address">
        <r-delivery-form :is-store="true"
                         :has-submit="false"
        ></r-delivery-form>
      </a-collapse-panel>
      <a-collapse-panel v-if="isCategory"
                        class="r-collapse-panel"
                        key="category"
                        header="By Category">
        <r-category-filter-category></r-category-filter-category>
      </a-collapse-panel>
      <a-collapse-panel v-if="isCategory"
                        class="r-collapse-panel"
                        key="price" header="By Price">
        <r-category-filter-price></r-category-filter-price>
      </a-collapse-panel>
      <a-collapse-panel class="r-collapse-panel"
                        v-for="(filter) in category.filters"
                        v-if="isCategory && filter.items.length > 1"
                        :key="filter.name"
                        :header="'By ' + filter.name"
      >
        <r-category-filter-item :filter="filter"></r-category-filter-item>
      </a-collapse-panel>
      <a-collapse-panel v-if="!isCategory" key="category"
                        class="r-collapse-panel"
                        header="Shop by Category">
        <r-category-links></r-category-links>
      </a-collapse-panel>
      <a-collapse-panel v-if="isStore && hasCategories"
                        key="catalog"
                        class="r-collapse-panel"
                        header="Catalog">
        <r-store-catalog></r-store-catalog>
      </a-collapse-panel>
      <a-collapse-panel v-if="!isHome && !isCategory" v-for="(item, index) in list"
                        :key="index + '-item'"
                        class="r-collapse-panel"
                        :header="item.title"
      >
        <div v-html="item.content"></div>
      </a-collapse-panel>
      <a-collapse-panel v-if="isStore" key="stores"
                        class="r-collapse-panel"
                        header="Popular Stores">
        <r-store-list></r-store-list>
      </a-collapse-panel>
    </a-collapse>
    <a-rowv v-if="isStore" class="r-mb-48" type="flex" justify="center">
      <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <div class="r-store-text-light">
          Shopple is an independent shopping service that is not necessarily affiliated with,
          endorsed or sponsored by the stores listed here but it enables you to get the deliveries
          you
          want.
        </div>
      </a-col>
    </a-rowv>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-menu',
  props: {
    isHome: { type: Boolean, required: false, default: false },
    isCategory: { type: Boolean, required: false, default: false },
    isStore: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      list: []
    }
  },
  computed: {
    activeKey () {
      let activeKey = 'links'

      if (this.isStore) {
        activeKey = 'address'
      } else if (this.isCategory) {
        activeKey = 'category'
      }
      return activeKey
    },
    ...mapGetters({
      user: 'auth/user',
      category: 'base/category',
      hasCategories: 'base/hasCategories',
      hasNotice: 'base/hasNotice',
      store: 'base/store'
    })
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
      this.list = [
        {
          title: 'Trading Hours',
          content: this.store ? this.store.trading_hours : null
        },
        {
          title: 'Contact',
          content: this.store.phone
        },
        {
          title: 'Description',
          content: this.store ? this.store.content_formatted : null
        },
        {
          title: 'Website',
          content: '<a target="_blank" href="' + this.store.url + '">' + this.store.url + '</a>'
        }
      ]
    }
  }
}
</script>
