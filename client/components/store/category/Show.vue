<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories"
           :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-category-show></r-category-show>
      <r-store-popover v-if="hasStore && hasCategories" :store="store"></r-store-popover>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-category-show',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 }
  },
  data () {
    return {
      payload: {
        route: null,
        slug: null,
        store: null,
        limit: process.env.APP_LIMIT,
        with: []
      }
    }
  },
  async fetch () {
    this.payload.route = this.$route.path
    this.payload.store = this.$route.params.store
    this.payload.slug = this.$route.params.slug

    await this.onCategory()
  },
  computed: {
    filters () {
      return {
        limit: process.env.APP_LIMIT,
        category_id: this.hasCategory ? this.category.id : null,
        sort: 0,
        page: 1
      }
    },
    ...mapGetters({
      store: 'base/store',
      category: 'base/category',
      hasStore: 'base/hasStore',
      hasCategories: 'base/hasCategories',
      hasCategory: 'base/hasCategory',
      processes: 'base/processes'
    })
  },
  created () {
  },
  mounted () {
  },
  methods: {
    async onCategory () {
      await this.$store.dispatch('base/onCategory', this.payload)
    }
  }
}
</script>
