<template>
  <a-select-option value="Yiminghe">
    <a-select-opt-group label="Engineer">
                 <span slot="label">
                  <a-icon type="user"/>
                  Beauty &amp; Wellness</span>
      <a-select-option value="jack">
        Body Care
      </a-select-option>
    </a-select-opt-group>
  </a-select-option>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-catalog-map-children',
  props: {},
  data () {
    return {
      selected: null,
      isVisible: false,
      defaultVariant: null,
      mapCategories: []
    }
  },
  created () {
    this.selected = this.variantId
  },
  computed: {
    ...mapGetters({})
  },
  mounted () {
  },
  methods: {
    async onMap () {
    },
    async onSelect () {
      await this.onMap()
    }
  }
}
</script>
