<template>
  <r-drawer-template placement="right"
                     current="store">
    <r-store-window :has-actions="false" :store="store"></r-store-window>
    <a-collapse default-active-key="1" expandIconPosition="right">
      <a-collapse-panel header="Catalog">
        <r-store-catalog></r-store-catalog>
      </a-collapse-panel>
      <a-collapse-panel header="You might like">
        <r-store-list></r-store-list>
      </a-collapse-panel>
      <a-collapse-panel header="About this store">
        <r-store-info :store="store"></r-store-info>
      </a-collapse-panel>
    </a-collapse>
  </r-drawer-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-drawer',
  data() {
    return {
      isToggled: false
    };
  },
  computed: mapGetters({
    store: 'base/store'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onToggle() {
      this.isToggled = !this.isToggled;
    }
  },
}
</script>
