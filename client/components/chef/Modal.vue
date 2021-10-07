<template>
  <r-modal-template :closable="closable"
                    :current="current"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-chef-apply></r-chef-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-chef-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'chef',
    }
  },
  mounted () {
  },
  methods: {},
}
</script>
