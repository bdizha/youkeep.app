<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :class="{'r-spin__active' :processes.isCategory}"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row v-if="hasCategories"  type="flex" justify="start" align="middle">
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
      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col v-if="!hasCategories && !processes.isCategories && !hasProducts" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row  type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                      <a-row :gutter="[24,24]"  type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 8 }"
                               :lg="{ span: 6 }"
                        >
                          <a-card>
                            <a-card-meta>
                              <template slot="description">
                                <div class="r-mv-48">
                                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                         :md="{ span: 24 }"
                                         :lg="{ span: 24 }"
                                  >
                                    <h4 class="r-heading-light r-text-uppercase r-text-primary">
                                      Coming soon!
                                    </h4>
                                  </a-col>
                                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                         :md="{ span: 24 }"
                                         :lg="{ span: 24 }"
                                  >
                                    <h1 class="r-heading">
                                      Everything your <span class="r-text-primary">heart</span> desires at <span class="r-text-secondary">{{ store.name }}!</span>
                                    </h1>
                                  </a-col>
                                </a-row>
                                </div>
                              </template>
                            </a-card-meta>
                          </a-card>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 16 }"
                               :lg="{ span: 18 }"
                        >
                          <r-store-photos :store="store"></r-store-photos>
                        </a-col>
                      </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <r-category-flush></r-category-flush>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-category-slider></r-category-slider>
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
          <r-product-list :filters="payload" :columns="columns"></r-product-list>
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
        category_ids: [],
        price_min: 0,
        price_max: null
      }
    },
    ...mapGetters({
      category: 'base/category',
      store: 'base/store',
      hasStore: 'base/hasStore',
      isStore: 'base/isStore',
      hasCategories: 'base/hasCategories',
      hasProducts: 'base/hasProducts',
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
