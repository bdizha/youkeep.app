<template>
  <div class="r-modal-content">
    <slot/>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-modal-template',
  props: {
    hasFooter: { type: Boolean, required: false, default: false },
    maskClosable: { type: Boolean, required: false, default: true },
    closable: { type: Boolean, required: false, default: true },
    current: { type: String, required: false, default: null },
    cssClass: { type: String, required: false, default: null },
    redirectTo: { type: String, required: false, default: null },
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    payload () {
    }
  }
}
</script>
