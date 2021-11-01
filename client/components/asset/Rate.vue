<template>
  <a-button
    block
    class="r-btn-bordered-primary" icon="star"
    size="large"
    type="secondary"
  >{{ store.rate.toFixed(1) + ' rate' }}
  </a-button>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-rate',
  props: {
    store: { type: Object, required: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.current = 'rate'

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {},
}
</script>
