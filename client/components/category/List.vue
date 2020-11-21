<template>
  <a-row v-if="hasData" :class="{'r-product-spinner--active': processes.isProduct}" type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-item v-if="index < limit"
                       v-for="(category, index) in categories"
                       :key="index + 1"
                       :columns="columns"
                       :category="category">
      </r-category-item>
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
  async fetch() {
    let payload = {
      type: 2,
      category_id: 1,
      limit: 12,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs']
    };

    await this.$store.dispatch('shop/onCategories', payload);
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
    this.hasData = false;
  },
  methods: {
    async payload() {
    }
  }
};
</script>
