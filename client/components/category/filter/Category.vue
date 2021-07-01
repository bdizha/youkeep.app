<template>
  <a-row :gutter="[0, 12]" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <a-collapse v-show="hasCategories"
                  defaultActiveKey="0"
                  accordion
                  expandIconPosition="left"
      >
        <template v-if="false" #expandIcon="props">
          <a-icon :type="hasMenuCategory ? 'down' : 'right'"/>
        </template>
        <a-collapse-panel class="r-collapse-panel"
                          :header="menuCategory.name"
        >
          <div v-for="(category, index) in categories"
          :key="index"
          >
            <nuxt-link :to="category.route" class="r-category-menu-link">
              <r-avatar v-show="category.level > 0" shape="circle"
                        :size="30"
                        :src="category.photo"
                        src-placeholder="/assets/icon_default.png"
              />
              {{ category.name }}
            </nuxt-link>
            <template v-if="category.has_categories">
              <div v-for="(subCategory, index) in category.categories"
                   :key="index"
                   class="r-category-filter"
              >
                <nuxt-link :to="subCategory.route" class="r-category-menu-link">
                  <r-avatar v-show="category.level > 0" shape="circle"
                            :size="30"
                            :src="category.photo"
                            src-placeholder="/assets/icon_default.png"
                  />
                  {{ category.name }}
                </nuxt-link>
              </div>
            </template>
          </div>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import axios from 'axios'

export default {
  name: 'r-category-filter-category',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    menuCategory: 'base/menuCategory',
    hasMenuCategory: 'base/hasMenuCategory',
    categories: 'base/categories',
    processes: 'base/processes',
    hasCategories: 'base/hasCategories'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onClass (category) {
      return `r-menu-icon r-menu-icon--${category.slug}`
    },
    onCategory (category) {
      this.$store.dispatch('base/onMenuCategory', category)
    }
  },
}
</script>
