<template>
  <a-row v-if="hasData" type="flex" justify="start">
    <a-col class="r-spin-holder" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-item v-if="index < limit"
                       v-for="(category, index) in categories"
                       :key="index + 1"
                       :columns="columns"
                       :category="category">
      </r-category-item>
      <r-spinner :is-absolute="true" v-if="processes.isCategory"></r-spinner>
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
    this.hasData = true;
  },
  methods: {
    async payload() {
    }
  }
};
</script>
