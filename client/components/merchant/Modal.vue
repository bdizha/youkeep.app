<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="current"
                    style="position: relative;">
    <r-merchant-apply></r-merchant-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-merchant-modal',
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      current: 'merchant',
    };
  },
  mounted() {
  },
  methods: {},
};
</script>
