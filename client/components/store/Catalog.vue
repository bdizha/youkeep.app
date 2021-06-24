<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :class="{'r-ph-12': hasCard}" v-if="hasCategories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-slider :has-card="hasCard" :columns="columns"></r-category-slider>
    </a-col>
    <a-col class="r-ph-24" v-if="!hasCategories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-empty></r-category-empty>
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
    }
  }
}
</script>
