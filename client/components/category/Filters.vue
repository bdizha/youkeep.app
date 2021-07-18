<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-button :size="size" block
                class="r-btn-bordered-grey"
                type="secondary"
                @click="onModal"
      >
        <a-icon type="control"/>
        Filters
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-filters',
  props: {
    justify: { type: String, required: false, default: 'start' },
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    async onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'category'

      await this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {},
}
</script>
