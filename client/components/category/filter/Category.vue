<template>
  <a-row class="r-category-menu" :gutter="[0, 12]" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <a-collapse v-show="!hasMenuCategory" defaultActiveKey="0"
                  activeKey="0"
                  accordion
                  expandIconPosition="left"
      >
        <template v-if="false" #expandIcon="props">
          <a-icon :type="hasMenuCategory ? 'down' : 'right'"/>
        </template>
        <a-collapse-panel key="0"
                          v-if="hasCategories"
                          class="r-collapse-panel"
                          :header="menuCategory.name"
        >
          <template v-if="hasCategories">
            <div v-for="(category, index) in categories"
                 :key="index"
                 class="r-category-filter"
            >
              <div class="r-category-menu-link"
                   @click="onCategory(category)"
              >
                <i v-show="category.level == 0" :class="onClass(category)"></i>
                <r-avatar v-show="category.level > 0" shape="circle"
                          :size="30"
                          :src="category.photo"
                          src-placeholder="/assets/icon_default.png"
                />
                {{ category.name }}
              </div>
            </div>
          </template>
        </a-collapse-panel>
      </a-collapse>
      <template v-show="hasMenuCategory">
        <r-category-menu-item v-for="(category, index) in categories"
                              :key="index"
                              v-show="menuCategory.id == category.id"
                              :category="category"
        ></r-category-menu-item>
      </template>
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
