<template>
  <div class="r-category-categories">
    <div class="r-category-filter">
      <div class="r-category-menu-link"
           @click="onCategory(selected)"
      >
        <a-icon :type="'left'"/>
        <i :class="onClass(menuCategory)"></i>
        {{ menuCategory.name }}
      </div>
    </div>
    <template v-if="hasData">
      <div v-for="(_category, index) in categories"
           :key="index"
           class="r-category-filter r-category-filter-avatar"
      >
        <nuxt-link class="r-category-menu-link"
                   :to="_category.route"
        >
          <r-avatar shape="circle"
                    :size="24"
                    :src="_category.photo"
                    src-placeholder="/assets/icon_default.png"
          />
          {{ _category.name }}
        </nuxt-link>
      </div>
    </template>
  </div>
</template>
<script>
import axios from 'axios'
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-menu-item',
  props: {
    category: { type: Object, required: true, default: {} }
  },
  async fetch () {
    const path = `/categories`
    const params = {
      category_id: this.category.id,
      limit: 24,
      level: 0
    }

    params.with = []

    let $this = this

    await axios.post(path, params)
      .then(response => {
        $this.categories = response.data.categories
        $this.hasData = true
      })
      .catch(e => {
        console.log(e)
      })
  },
  data () {
    return {
      selected: { name: 'All Categories', slug: null },
      hasData: false,
      categories: []
    }
  },
  computed: mapGetters({
    menuCategory: 'base/menuCategory',
    hasMenuCategory: 'base/hasMenuCategory'
  }),
  created () {
  },
  methods: {
    onClass (category) {
      return `r-menu-icon r-menu-icon--${category.slug}`
    },
    onCategory (category) {
      this.$store.dispatch('base/onMenuCategory', category)
      return false
    }
  }
}
</script>
