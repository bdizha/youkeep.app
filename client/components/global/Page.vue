<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 18 }" :xs="{ span: 24 }" class="r-margin-out-sm">
      <slot/>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-page',
  props: {},
  data () {
    return {}
  },
  mounted () {
    this.$store.dispatch('base/onHasSubscribe', false)
    this.$store.dispatch('base/onHasDownload', false)
  },
  methods: {},
}
</script>
