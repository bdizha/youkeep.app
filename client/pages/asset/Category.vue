<template>
  <r-category-show :colums="6"></r-category-show>
</template>
<script>

export default {
  layout: 'category',
  name: 'r-store-category',
  components: {},
  props: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    async payload () {
      await this.$store.dispatch('base/onIsStore', false)
    }
  }
}
</script>
