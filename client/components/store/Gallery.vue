<template>
  <r-modal-template :closable="true"
                    :mask-closable="false"
                    current="store-gallery"
  >
    <r-store-photos></r-store-photos>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-gallery',
  components: {},
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    stores: 'base/stores',
    categories: 'base/categories',
    hasStores: 'base/hasStores',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      // this.fetchCategories();
    }
  }
}
</script>
