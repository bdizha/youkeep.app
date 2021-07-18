<template>
  <a-row justify="end" type="flex">
    <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 8 }" :xs="{ span: 12 }">
      <a-button block
                class="r-btn-bordered-secondary"
                html-type="button"
                size="large"
                type="secondary"
                v-on:click="onModal"
      >
        Add new
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
export default {
  props: {},
  data () {
    return {
      isDefault: false,
      modal: {
        current: null,
        isVisible: false,
        category: null,
        address: null,
      }
    }
  },
  computed: {},
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'account-address'

      this.$store.dispatch('address/onAddress', null)
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
