<template>
  <a-layout class="r-layout__default">
    <r-header></r-header>
    <a-layout-content :class="{'r-has-data': true}">
      <a-layout>
        <a-layout-content>
          <nuxt/>
        </a-layout-content>
      </a-layout>
      <r-footer></r-footer>
      <r-spinner process="isFixed" :is-absolute="false"></r-spinner>
    </a-layout-content>
  </a-layout>
</template>
<script>
export default {
  data: () => ({}),
  created() {
  },
  computed: {},
  methods: {}
}
</script>
