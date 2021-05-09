<template>
  <r-category-show :colums="6"></r-category-show>
</template>
<script>

export default {
  layout: 'category',
  components: {},
  props: {},
  async asyncData ({ store, params, query }) {
    console.log('>>>> params', params);
    console.log('>>>> query', query);

    const payload = {
      route: `/category/${params.slug}/${params.level}`,
      slug: params.slug,
      level: params.level,
      order_by: 'randomized_at',
      limit: process.env.APP_LIMIT,
      with: ['breadcrumbs', 'photos', 'products']
    }

    await store.dispatch('base/onCategory', payload)
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
