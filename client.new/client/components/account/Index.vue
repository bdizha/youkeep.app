<template>
  <a-row justify="end" type="flex">
    <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 8 }" :xs="{ span: 12 }">
      account >> store >> category >> show >> page
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-account',
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
      modal.current = 'account-card'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
