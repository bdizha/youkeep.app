<template>
  <a-row class="r-mb-24" :gutter="[24, 24]" type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-category-header">
        <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, 24]" type="flex" justify="start" align="middle">
          <a-col v-for="(category, index) in categories"
                 v-if="index < 12"
                 :key="index + 1"
                 :xs="{ span: 12 }"
                 :sm="{ span: 8 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <nuxt-link class="r-slider-item r-text-view-more"
                       :class="'r-slider-item-36'"
                       :to="category.route">
              <r-avatar shape="circle"
                        :size="36"
                        :src="category.photo"
                        :style="'background-image: url(' + category.photo + ');'">
              </r-avatar>
              <div class="r-text-slider">
                {{ category.name }}
              </div>
            </nuxt-link>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col v-if="false" class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-shop-now v-if="!isShowing" :category="category" justify="end"></r-category-shop-now>
      <r-category-shop-by v-if="isShowing" :category="category" justify="end"></r-category-shop-by>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-header',
  props: {
    category: {type: Object, required: false, default: {}},
    hasProduct: {type: Boolean, required: false, default: true},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      fetchBy: {
        id: 1
      }
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    hasCategories: 'shop/hasCategories',
    categories: 'shop/categories',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onCategory() {
      this.$store.dispatch('shop/onCategory', this.category.route);
    }
  }
};
</script>
