<template>
  <r-modal-template :closable="true"
                    :mask-closable="false"
                    :width="540"
                    current="store-catalog-map"
  >
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col :lg="{span: 24}" :md="{span: 24 }" :sm="{span: 24}" :xs="{span: 24}"
      >
        <a-row v-if="hasCatalogMap" :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{span: 24}" :md="{span: 24 }" :sm="{span: 24}" :xs="{span: 24}"
          >
            <r-store-catalog-map-category :categories="catalogMap.from"></r-store-catalog-map-category>
          </a-col>
          <a-col :lg="{span: 24}" :md="{span: 24 }" :sm="{span: 24}" :xs="{span: 24}"
          >
            <r-store-catalog-map-category :categories="catalogMap.to"></r-store-catalog-map-category>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-catalog-map',
  props: {},
  data () {
    return {}
  },
  async created () {
    await this.onPayload()
  },
  computed: {
    ...mapGetters({
      'store': 'base/store',
      'hasStore': 'base/hasStore',
      'catalogMap': 'shop/catalogMap',
      'hasCatalogMap': 'shop/hasCatalogMap'
    })
  },
  mounted () {
  },
  methods: {
    async onPayload () {
      await this.$store.dispatch('shop/onCatalogMap', { store_id: this.store.id })
    }
  }
}
</script>
