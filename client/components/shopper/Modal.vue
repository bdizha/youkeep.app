<template>
  <r-modal-template :closable="true"
                    :css-class="'r-modal-shopper'"
                    :current="current"
                    :mask-closable="true"
  >
    <r-shopper-apply></r-shopper-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-shopper-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'shopper',
    }
  },
  mounted () {
  },
  methods: {},
}
</script>
