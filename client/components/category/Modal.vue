<template>
  <r-modal-template :mask-closable="true"
                    :closable="true"
                    current="category"
  >
    <r-store-menu :is-category="true" :is-store="false"></r-store-menu>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-modal',
  data () {
    return {}
  },
  computed: mapGetters({
    category: 'base/category',
    modal: 'base/modal'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
