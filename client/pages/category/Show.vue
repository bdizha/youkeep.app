<template>
  <r-category-show :colums="6"></r-category-show>
</template>
<script>

export default {
  layout: 'category',
  components: {},
  props: {},
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
