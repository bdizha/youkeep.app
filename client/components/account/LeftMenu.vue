<template>
  <a-layout-sider
    breakpoint="lg"
    collapsedWidth="0"
    @collapse="onCollapse"
    @breakpoint="onBreakpoint"
    class="r-slider-left" width="312"
  >
    <r-account-menu></r-account-menu>
  </a-layout-sider>
</template>
<script>
export default {
  components: {},
  data () {
    return {}
  },
  methods: {
    onCollapse () {
      console.log('onCollapse')
    },
    onBreakpoint () {
      console.log('onCollapse')
    },
  },
}
</script>
