<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    current="delivery"
                    style="position: relative;">
    <r-notice process="isSuccess"></r-notice>
    <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    <template v-if="hasForm">
      <r-delivery-form :has-modal="true" :has-submit="false"></r-delivery-form>
      <r-delivery-addresses></r-delivery-addresses>
      <r-account-address-list></r-account-address-list>
    </template>
  </r-modal-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {};
  },
  created() {
    this.onAddresses();
  },
  computed: mapGetters({
    hasForm: 'base/hasForm',
  }),
  methods: {
    async onAddresses() {
      await this.$store.dispatch('account/onAddresses');
    }
  },
};
</script>