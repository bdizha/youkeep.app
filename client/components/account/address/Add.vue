<template>
  <a-row justify="end" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-button block
                class="r-btn-bordered-secondary"
                html-type="button"
                size="default"
                type="secondary"
                v-on:click="onModal"
      >
        Add Address
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-account-address-add',
  props: {},
  data () {
    return {
      isDefault: false,
      modal: {
        current: null,
        isVisible: false,
        category: null,
        address: null
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
