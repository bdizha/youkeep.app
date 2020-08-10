<template>
  <r-category-show :colums="6"></r-category-show>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  layout: 'category',
  name: 'r-store-category',
  components: {},
  props: {},
  async asyncData({store, params}) {
    let route = `/store/${params.store_slug}/category/${params.category_slug}`;
    await store.dispatch('shop/onCategory', route);
  },
  data() {
    return {}
  },
  created() {
    this.payload();
  },
  methods: {
    async payload() {
    }
  }
};
</script>
