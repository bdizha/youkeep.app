<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="r-store-page" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-arrows v-if="hasCategories"></r-category-arrows>
      <r-store-arrows v-if="!hasCategories"></r-store-arrows>
      <a-row class="r-mt-24" type="flex" justify="center" align="middle">
        <a-col class="r-ph-24"
               :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <a-row :gutter="[24,24]" class="r-mb-12" type="flex" justify="center"
                 align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 20 }" :lg="{ span: 20 }">
              <h3 class="r-heading">
                {{ hasStore ? store.name : '' }}
              </h3>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 4 }" :lg="{ span: 4 }"
                   style="text-align: right">
              <r-store-shop-now v-if="isStore" justify="end"></r-store-shop-now>
              <r-category-filters v-if="!isStore" :category="category" justify="end"></r-category-filters>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <slot/>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-template',
  components: {},
  props: {
    isStore: {type: Boolean, required: false, default: true},
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    hasStore: 'base/hasStore',
    category: 'base/category',
    hasNotice: 'base/hasNotice',
    hasCategories: 'base/hasCategories',
    hasShop: 'base/hasShop'
  }),
  created() {
    this.payload();
  },
  mounted() {
  },
  methods: {
    payload() {
    },
    onCollapse() {
      console.log('onCollapse');
    },
    onBreakpoint() {
      console.log('onCollapse');
    },
  }
};
</script>
