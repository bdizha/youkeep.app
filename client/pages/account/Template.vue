<template>
  <a-row id="r-slider-left" :gutter="16" class="r-stickyss r-sticky-138" justify="center" type="flex">
    <a-col :lg="{ span: 18 }" :sm="{ span: 18 }"
           :xs="{ span: 24 }" class="gutter-row"
    >
      <a-layout>
        <r-account-left-menu></r-account-left-menu>
        <a-layout-content class="r-min-height-256 r-layout-column">
          <div class="r-ph-24">
            <slot/>
          </div>
        </a-layout-content>
      </a-layout>
    </a-col>
  </a-row>
</template>
<script>
export default {
  components: {},
  props: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
  }
}
</script>
