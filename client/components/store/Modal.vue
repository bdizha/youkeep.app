<template>
  <r-modal-template :css-class="'r-modal-store-tray'"
                    :mask-closable="false"
                    :closable="true"
                    current="store"
                    style="position: relative;"
  >
    <a-row :gutter="[12,12]" type="flex" justify="center">
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <h2 class="r-heading r-text-secondary">
          Find your store
        </h2>
      </a-col>
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <p class="r-text-normal" style="padding-bottom: 0">
          Simply shop at your favorite shop.
        </p>
      </a-col>
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <r-search></r-search>
      </a-col>
      <a-col class="r-text-left" :xs="{ span: 24 }">
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
    stores: 'base/stores',
    categories: 'base/categories',
    hasStores: 'base/hasStores',
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
