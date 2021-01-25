<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-if="index < limit"
                          v-for="(category, index) in categories"
                          :key="index"
                          :columns="columns"
                          class="r-category-menu-panel" :header="category.name">
          <r-category-item :isVertical="isVertical"
                           :columns="columns"
                           :category="category"></r-category-item>
        </a-collapse-panel>
      </a-collapse>
      <r-spinner :is-absolute="true" process="isCategories" v-if="processes.isCategory"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-list',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 3},
    isVertical: {type: Boolean, required: false, default: true},
    limit: {type: Number, required: false, default: 6}
  },
  data() {
    return {
      hasData: false
    }
  },
  computed: mapGetters({
    categories: "shop/categories",
    hasCategories: "shop/hasCategories",
    processes: "base/processes",
  }),
  created() {
  },
  mounted() {
  },
  methods: {
    async payload() {
    }
  }
};
</script>
