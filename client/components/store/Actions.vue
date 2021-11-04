<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <r-store-subscribe :store="store" />
        </a-col>
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <a-button block class="r-btn-bordered-secondary"
                    size="large"
                    type="secondary"
                    @click="onDrawer"
          >
            <a-icon type="shop" />
            Catalog
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'RStoreActions',
  components: {},
  props: {
    store: { type: Object, required: false },
    hasInfo: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onDrawer () {
      const drawer = {}
      drawer.isVisible = true
      drawer.current = 'store'

      this.$store.dispatch('base/onDrawer', drawer)
    }
  }
}
</script>
