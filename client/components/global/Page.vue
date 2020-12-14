<template>
  <a-row type="flex" justify="center">
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 18 }" :md="{ span: 18 }" :lg="{ span: 16 }">
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
