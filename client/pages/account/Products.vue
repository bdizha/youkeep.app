<template>
  <r-account>
    <a-row :gutter=[24,24] justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading">
          Your categories history
        </h3>
        <p class="r-text-normal">
          Find your entire products history below
        </p>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-products',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({}),
  created () {
    this.onModal()
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.address = null
      modal.current = 'account-products'

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
