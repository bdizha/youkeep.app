<template>
  <a-row :gutter="[24, 24]" class="r-mb-24" type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: hasProduct ? 18 : 20 }"
           :lg="{ span: hasProduct ? 18 : 20 }">
      <h3 class="r-heading">
        {{ category.name }}
      </h3>
    </a-col>
    <a-col class="r-hide-sm" :xs="{ span: 4 }" :sm="{ span: 4 }" :md="{ span: hasProduct ? 6 : 4 }"
           :lg="{ span: hasProduct ? 6 : 4 }">
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
