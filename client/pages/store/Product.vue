<template>
  <r-product-show></r-product-show>
</template>
<script>
export default {
  layout: 'default',
  components: {},
  props: {},
  async asyncData ({ store, params }) {
    const route = `/product/${params.slug}`
    params.route = route
    params.category_id = null
    params.with = ['category', 'breadcrumbs']
    await store.dispatch('base/onProduct', params)
  },
  data () {
    return {}
  },
  created () {
    // this.payload()
  },
  methods: {
    async payload () {
      await this.$store.dispatch('base/onIsStore', false)
    }
  }
}
</script>
