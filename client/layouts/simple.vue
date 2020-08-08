<template>
  <div class="site">
    <a-layout class="r-layout__store">
      <r-store-header></r-store-header>
      <a-layout-sider v-model="collapsed"
                      :trigger="null"
                      collapsible>
        <r-store-menu v-show="!isCategory"></r-store-menu>
        <r-category-filters v-show="isCategory"></r-category-filters>
      </a-layout-sider>
      <a-layout-content class="r-layout-content__store" :class="{'r-has-data': true}">
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
  data: () => ({
    collapsed: false,
  }),
  computed: {
    isCategory() {
      return false;
    }
  },
  mounted() {
  },
  methods: {}
}
</script>
