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
