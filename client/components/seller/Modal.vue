<template>
  <r-modal-template :closable="closable"
                    :current="current"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-seller-apply></r-seller-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-seller-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'seller',
    }
  },
  mounted () {
  },
  methods: {},
}
</script>
