<template>
  <div class="r-banner">
    <r-product-flush v-if="category" :columns="6" :category="category"></r-product-flush>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-banner',
  props: {
    category: {type: Object, required: null}
  },
  async fetch() {
    let params = {
      category_id: this.category.id,
      limit: 6
    };

    await this.$store.dispatch('shop/onProducts', params);
  },
  data() {
    return {}
  },
  methods: {}
};
</script>
