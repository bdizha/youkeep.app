<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :class="{'r-spin__active' :processes.isCategory}"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-gradient r-hide-lg r-p-12">
        <r-search class="r-hide-lg" :class="{'r-pb-12': hasCategories}"></r-search>
      </div>
      <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
      <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-slider :category="category"></r-category-slider>
          <r-product-flush :columns="3"></r-product-flush>
        </a-col>
      </a-row>
      <r-product-list v-if="hasCategory" :filters="filters" :columns="columns"></r-product-list>
      <a-row class="r-mt-48" type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <div class="r-margin-out">
            <r-category-list :columns="6"></r-category-list>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-show',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 }
  },
  data () {
    return {
      payload: {
        route: null,
        slug: null,
        limit: process.env.APP_LIMIT,
        with: []
      }
    }
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
      category: 'base/category',
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
  }
}
</script>
