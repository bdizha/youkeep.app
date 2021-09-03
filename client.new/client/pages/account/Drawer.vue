<template>
  <r-drawer
    current="account-menu"
    placement="right"
  >
    <r-account-menu></r-account-menu>
  </r-drawer>
</template>
<script>
export default {
  name: 'r-account-drawer',
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
  }
}
</script>
