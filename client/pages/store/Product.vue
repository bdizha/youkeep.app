<template>
  <r-product-show></r-product-show>
</template>
<script>
export default {
  layout: 'category',
  name: 'r-store-category',
  components: {},
  props: {},
  async asyncData({store, params}) {
    let route = `/product/${params.slug}`;
    params.route = route;
    params.with = ['category', 'breadcrumbs'];
    await store.dispatch('shop/onProduct', params);
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
