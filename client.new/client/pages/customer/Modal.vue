<template>
  <r-modal-template :closable="closable"
                    :current="current"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-shopper-apply></r-shopper-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-customer-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'shopper',
    }
  },
  created () {
  },
  methods: {},
}
</script>
