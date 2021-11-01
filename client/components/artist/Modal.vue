<template>
  <r-modal-template :closable="closable"
                    :current="current"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <r-artist-apply></r-artist-apply>
  </r-modal-template>
</template>
<script>
export default {
  name: 'r-artist-modal',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'artist',
    }
  },
  mounted () {
  },
  methods: {},
}
</script>
