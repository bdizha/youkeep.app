<template>
  <a-row type="flex" justify="center">
    <a-col class="gutter-row" :span="24">
      <slot/>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-page',
  props: {},
  data() {
    return {}
  },
  mounted() {
    this.$store.dispatch('base/onHasSubscribe', false);
    this.$store.dispatch('base/onHasDownload', false);
  },
  methods: {},
};
</script>
