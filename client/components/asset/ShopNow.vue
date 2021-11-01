<template>
  <a-row :justify="justify" align="middle" type="flex">
    <a-col :lg="{span: span}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-button :size="size"
                block
                class="r-btn-secondary"
                type="secondary"
                @click="onModal"
      >
        <a-icon type="shop"></a-icon>
        Find your store
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-shop-now',
  props: {
    span: { type: Number, required: false, default: 24 },
    justify: { type: String, required: false, default: 'start' },
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
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
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {},
}
</script>
