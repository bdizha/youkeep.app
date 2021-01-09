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
          <nuxt />
        </a-layout-content>
      </a-layout>
      <r-footer></r-footer>
    </a-layout-content>
    <r-bottom></r-bottom>
  </a-layout>
</template>
<script>
import {mapGetters} from 'vuex'
export default {
  data: () => ({
    collapsed: true,
  }),
  created() {
    this.onStores();
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
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
