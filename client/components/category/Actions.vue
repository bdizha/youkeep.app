<template>
  <a-row type="flex" justify="start" align="middle"
         class="r-gradient r-sticky-69s r-line-top r-line-bottom" id="r-store-header">
    <a-col class="r-p-12" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-category-arrows></r-category-arrows>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-actions',
  props: {
    padding: {type: String, required: false, default: ''},
  },
  data() {
    return {};
  },
  computed: mapGetters({
    store: "shop/store",
    categories: "shop/categories",
    hasCategories: "shop/hasCategories",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
  }
};
</script>
