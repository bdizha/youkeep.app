<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-button block :class="{ 'r-btn-white-bordered': isDark, 'r-btn-secondary-bordered': !isDark }" @click="onStoreTray">
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
    hasStoreTray: 'base/hasStoreTray',
    isDark: 'base/isDark'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onStoreTray () {
      const modal = {}
      modal.isVisible = !this.hasStoreTray
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {}
}
</script>
