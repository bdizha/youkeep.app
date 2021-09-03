<template>
  <r-drawer-template
    current="account"
    placement="right"
  >
    <r-account-menu></r-account-menu>
  </r-drawer-template>
</template>
<script>
export default {
  data () {
    return {}
  },
  computed: {},
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
