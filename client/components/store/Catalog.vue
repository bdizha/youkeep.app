<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col v-if="hasCategories" :class="{'r-ph-12': hasCard}" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-category-slider :columns="columns" :has-card="hasCard"></r-category-slider>
    </a-col>
    <a-col v-if="!hasCategories" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-ph-24">
      <r-category-empty></r-category-empty>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-ph-24">
      <a-button block class="r-btn-secondary" html-type="button"
                type="secondary"
                @click="onCatalogMap"
      >
        Configure Catalog Map
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-catalog',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 1 },
    store: { type: Object, required: false },
    span: { type: Number, required: false, default: 24 },
    hasCard: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      hasData: true,
      isProcessing: true,
      width: 18
    }
  },
  computed: mapGetters({
    hasCategories: 'base/hasCategories'
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onCatalogMap () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'store-catalog-map'
      this.$store.dispatch('base/onModal', modal)

      this.$store.dispatch('base/onProduct', this.product)
    }
  }
}
</script>
