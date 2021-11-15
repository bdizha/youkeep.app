<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col v-for="(category, index) in categories"
           :key="index" :span="24"
    >
      <nuxt-link :to="category.route" class="r-item-shadow">
        <r-avatar :size="30"
                  :src="category.photo"
                  shape="circle"
                  src-placeholder="/patterns/pattern-dark.svg"
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
