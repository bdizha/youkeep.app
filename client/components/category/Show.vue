<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :class="{'r-spin__active' :processes.isCategory}" :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-spin-holder r-categories"
    >
      <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col v-if="!hasProducts" :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 6 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <div class="r-mv-24">
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                                {{ store.description }}
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h1 class="r-heading">
                                Everything your <span class="r-text-primary">heart</span> desires at <span
                                class="r-text-secondary"
                              >{{ store.name }}!</span>
                              </h1>
                            </a-col>
                          </a-row>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 18 }" :md="{ span: 16 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-category-banners></r-category-banners>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-category-flush></r-category-flush>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-category-arrows :has-photo="false"></r-category-arrows>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-product-flush :columns="3"></r-product-flush>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-category-list :columns="2" :is-vertical="false"></r-category-list>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-product-list :columns="columns" :filters="payload"></r-product-list>
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
    columns: { type: Number, required: false, default: 12 }
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
    this.$message.success('You\'re business in the ' + this.category.name + ' section at ' + this.store.name + '.', 6)
  },
  mounted () {
  },
  methods: {}
}
</script>
