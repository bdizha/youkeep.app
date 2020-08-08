<template>
  <div class="site">
    <a-layout>
      <r-header></r-header>
      <a-layout-content :class="{'r-has-data': true}">
        <a-layout>
          <a-layout-content>
            <nuxt/>
          </a-layout-content>
        </a-layout>
        <r-footer></r-footer>
        <r-bottom></r-bottom>
        <r-spinner process="isFixed" :is-absolute="false"></r-spinner>
      </a-layout-content>
    </a-layout>
  </div>
</template>
<script>
export default {
  data: () => ({}),
  mounted() {
  },
  computed: {},
  methods: {}
}
</script>
