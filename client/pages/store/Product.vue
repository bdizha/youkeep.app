<template>
  <r-product-show></r-product-show>
</template>
<script>
export default {
  layout: 'product',
  name: 'r-store-product',
  components: {},
  props: {},
  async asyncData ({ store, params }) {
    const route = `/product/${params.slug}`

    const categoryParts = params.category.split('--')

    console.log('category paths', categoryParts)

    params.route = route
    params.category_id = categoryParts[1]
    params.with = ['category', 'breadcrumbs']
    await store.dispatch('base/onProduct', params)
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    }
  }
}
</script>
