<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-button block @click="onStoreTray" class="r-btn-secondary">
        {{ hasStore ? store.name : 'Switch Store' }}
        <a-icon type="down"/>
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-switch',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    hasStore: 'base/hasStore',
    store: 'base/store',
    hasStoreTray: 'base/hasStoreTray'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onStoreTray () {
      let modal = {}
      modal.isVisible = !this.hasStoreTray
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {},
}
</script>
