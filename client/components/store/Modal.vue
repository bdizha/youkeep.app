<template>
  <r-modal-template :closable="true"
                    :css-class="'r-modal-store-tray'"
                    :mask-closable="false"
                    current="store"
  >
    <a-row :gutter="[12,12]" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h2 class="r-heading r-text-secondary">
          Find your store
        </h2>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <p class="r-text-normal" style="padding-bottom: 0">
          Simply shop at your favorite shop.
        </p>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <r-search></r-search>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <r-store-list></r-store-list>
      </a-col>
    </a-row>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-modal',
  components: {},
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    sellers: 'base/sellers',
    categories: 'base/categories',
    hassellers: 'base/hassellers',
    processes: 'base/processes',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      // this.fetchCategories();
    },
  }
}
</script>
