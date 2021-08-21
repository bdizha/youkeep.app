<template>
  <r-drawer-template
    current="category-menu"
    placement="left"
  >
    <r-category-menu></r-category-menu>
  </r-drawer-template>
</template>
<script>
export default {
  name: 'r-category-drawer',
  data () {
    return {}
  },
  computed: {},
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
