<template>
  <r-modal-template :mask-closable="true"
                    :closable="true"
                    current="category">
    <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
    <a-card class="r-mt-24" title="Filter By">
      <r-category-menu></r-category-menu>
    </a-card>
  </r-modal-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-modal',
  data() {
    return {};
  },
  computed: mapGetters({
    category: 'base/category',
    modal: 'base/modal'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
}
</script>
