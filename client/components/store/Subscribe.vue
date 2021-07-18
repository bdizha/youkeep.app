<template>
  <a-button block
            class="r-btn-bordered-secondary"
            icon="check-circle" size="large"
            type="secondary"
            @click="onModal"
  >
    Follow
  </a-button>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-subscribe',
  props: {
    store: { type: Object, required: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    hasStoreTray: 'base/hasStoreTray'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal () {
      const modal = {}
      modal.isVisible = !this.hasStoreTray
      modal.current = 'subscribe'

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {},
}
</script>
