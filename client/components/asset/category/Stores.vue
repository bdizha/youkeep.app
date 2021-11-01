<template>
  <a-row :gutter="[24, 24]" align="middle" class="r-mb-24" justify="start" type="flex">
    <a-col :class="{'r-spin__active': $fetchState.pending}" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row v-if="hasCategories" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]"
             align="middle"
             class="r-category-header" justify="start"
             type="flex"
      >
        <a-col v-for="(category, index) in categories"
               v-if="index < 12"
               :key="index + 1"
               :lg="{ span: 24 / columns }"
               :md="{ span: 24 / columns }"
               :sm="{ span: 8 }"
               :xs="{ span: 12 }"
        >
          <nuxt-link :to="category.route"
                     class="r-slider-item r-slider-item-36 r-text-view-more"
          >
            <r-avatar :size="36"
                      :src="category.photo"
                      :style="'background-image: url(' + category.photo + ');'"
                      shape="circle"
            >
            </r-avatar>
            <div class="r-text-slider">
              {{ category.name }}
            </div>
          </nuxt-link>
        </a-col>
      </a-row>
      <r-spinner :is-absolute="true"></r-spinner>
    </a-col>
    <a-col v-if="!$fetchState.pending" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]"
             align="middle" justify="space-between"
             type="flex"
      >
        <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <r-category-shop-now :category="category" justify="end"></r-category-shop-now>
        </a-col>
        <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <r-category-filters :category="category" justify="end"></r-category-filters>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-store-category-stores',
  props: {
    columns: { type: Number, required: false, default: 6 },
    category: { type: Object, required: false, default: () => {} },
    hasProduct: { type: Boolean, required: false, default: true },
    isShowing: { type: Boolean, required: false, default: false }
  },
  async fetch () {
    this.payload = {
      category_id: this.category.id,
      limit: process.env.APP_LIMIT,
      order_by: 'randomized_at'
    }

    await this.onStores()
  },
  data () {
    return {
      payload: {},
      categories: []
    }
  },
  computed: {
    hasCategories () {
      return this.categories.length > 0
    }
  },
  created () {
  },
  methods: {
    async onStores () {
      await this.$store.dispatch('shop/onStores', this.payload)

      console.log('new stores', this.categories)
    }
  }
}
</script>
