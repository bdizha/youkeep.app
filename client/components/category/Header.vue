<template>
  <a-row class="r-mb-24" :gutter="[24, 24]" type="flex" justify="start" align="middle">
    <a-col :class="{'r-spin__active': $fetchState.pending}" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row v-if="hasCategories" class="r-category-header" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]"
             type="flex" justify="start"
             align="middle">
        <a-col v-for="(category, index) in categories"
               v-if="index < 12"
               :key="index + 1"
               :xs="{ span: 12 }"
               :sm="{ span: 8 }"
               :md="{ span: 24 / columns }"
               :lg="{ span: 24 / columns }">
          <NuxtLink  :prefetch="true" class="r-slider-item r-slider-item-36 r-text-view-more"
                     :to="category.route">
            <r-avatar shape="circle"
                      :size="36"
                      :src="category.photo"
                      :style="'background-image: url(' + category.photo + ');'">
            </r-avatar>
            <div class="r-text-slider">
              {{ category.name }}
            </div>
          </NuxtLink>
        </a-col>
      </a-row>
      <r-spinner :is-absolute="true"></r-spinner>
    </a-col>
    <a-col v-if="!$fetchState.pending" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]"
             type="flex" justify="space-between"
             align="middle">
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 4 }"
               :lg="{ span: 4 }">
          <r-category-shop-now :category="category" justify="end"></r-category-shop-now>
        </a-col>
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 4 }"
               :lg="{ span: 4 }">
          <r-category-filters :category="category" justify="end"></r-category-filters>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-header',
  props: {
    columns: {type: Number, required: false, default: 6},
    category: {type: Object, required: false, default: {}},
    hasProduct: {type: Boolean, required: false, default: true},
    isShowing: {type: Boolean, required: false, default: false},
  },
  async fetch() {
    this.payload = {
      type: 2,
      has_store: false,
      level: this.category.level,
      category_id: this.category.id,
      limit: process.env.APP_LIMIT,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs']
    };

    await this.onCategories();
  },
  data() {
    return {
      payload: {},
      categories: []
    }
  },
  computed: {
    hasCategories() {
      return this.categories.length > 0;
    }
  },
  created() {
  },
  methods: {
    async onCategories() {
      this.categories = await this.$store.dispatch('shop/onCategories', this.payload);

      console.log('new categories', this.categories);
    }
  }
};
</script>
