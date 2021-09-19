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
    sellers: 'base/sellers',
    categories: 'base/categories',
    hasSellers: 'base/hasSellers',
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
