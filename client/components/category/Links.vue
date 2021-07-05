<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col v-for="(category, index) in categories"
           :key="index" :span="24">
      <nuxt-link :to="category.route" class="r-item-shadow">
        <r-avatar shape="circle"
                  :size="30"
                  :src="category.photo"
                  src-placeholder="/assets/icon_default.png"
        />
        {{ category.name }}
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-links',
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
  }
}
</script>
