<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :span="24">
      <r-help-list></r-help-list>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-help-show',
  props: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {

    }
  }
}
</script>
