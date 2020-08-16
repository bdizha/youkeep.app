<template>
  <a-layout class="r-layout__store">
    <r-header></r-header>
    <a-layout-sider v-model="collapsed"
                    :trigger="null"
                    collapsible>
      <r-menu></r-menu>
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
</template>
<script>
export default {
  data: () => ({
    collapsed: true,
  }),
  created() {
    this.onStores();
  },
  computed: {},
  methods: {
    async onStores() {
      let params = {
        category_id: null,
        limit: 24
      };

      await this.$store.dispatch('base/onStores', params);
    }
  }
}
</script>
