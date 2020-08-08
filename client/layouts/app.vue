<template>
  <div class="site">
    <a-layout>
      <r-store-header></r-store-header>
      <a-layout-sider v-model="collapsed"
                      :trigger="null"
                      collapsible>
        <r-store-menu v-show="!isCategory"></r-store-menu>
        <r-category-filters v-show="isCategory"></r-category-filters>
      </a-layout-sider>
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
  name: 'app',
  data: () => ({
    collapsed: false,
  }),
  computed: {
    isCategory() {
      return this.$route.meta.isCategory;
    }
  },
  mounted() {
  },
  methods: {}
}
</script>
