<template>
  <r-store-category-show :colums="6"></r-store-category-show>
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
    }
  }
}
</script>
