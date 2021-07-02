<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :class="{'r-spin__active' :processes.isCategory}"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row  type="flex" justify="start" align="middle">
        <a-col class="r-hide-lg" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-search class="r-p-24 r-pv-12" :class="{'r-pb-12': hasCategories}"></r-search>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-category-breadcrumbs :breadcrumbs="category.breadcrumbs"></r-category-breadcrumbs>
        </a-col>
      </a-row>
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
        <a-col v-if="hasCategories" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-category-slider :category="category"></r-category-slider>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-product-flush :columns="3"></r-product-flush>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-product-list v-if="hasCategory" :filters="payload" :columns="columns"></r-product-list>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-category-list :columns="6"></r-category-list>
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
      filters: []
    }
  },
  computed: {
    payload () {
      return {
        limit: process.env.APP_LIMIT,
        category_id: this.hasCategory ? this.category.id : null,
        sort: 0,
        page: 1,
        filters: [],
        price_min: 0,
        price_max: null
      }
    },
    ...mapGetters({
      category: 'base/category',
      store: 'base/store',
      hasCategories: 'base/hasCategories',
      hasCategory: 'base/hasCategory',
      processes: 'base/processes'
    })
  },
  created () {
    this.$store.dispatch('product/onPayload', this.payload)
    this.$message.success('You\'re shopping in the ' + this.category.name + ' section at ' + this.store.name + '.', 6)
  },
  mounted () {
  },
  methods: {}
}
</script>
