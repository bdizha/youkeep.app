<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="current"
                    style="position: relative;">
    <r-shopper-apply></r-shopper-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-shopper-modal',
  props: {
    maskClosable: {type: Boolean, required: false, default: false},
    closable: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      current: 'shopper',
    };
  },
  created() {
  },
  methods: {},
};
</script>
