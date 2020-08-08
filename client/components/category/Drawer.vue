<template>
  <r-drawer
    placement="left"
    current="category-menu">
    <r-category-menu></r-category-menu>
  </r-drawer>
</template>
<script>
  export default {
    name: 'r-category-drawer',
    data() {
      return {};
    },
    computed: {},
    mounted() {
      this.payload();
    },
    methods: {
      payload() {
      }
    },
  }
</script>
