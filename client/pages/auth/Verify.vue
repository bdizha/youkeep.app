<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      &nbsp;
    </a-col>
  </a-row>
</template>
<script>
export default {
  data: () => ({
  }),
  async created () {
    const modal = {}
    modal.isVisible = true
    modal.isClosable = false
    modal.current = 'verify'
    await this.$store.dispatch('base/onModal', modal)
  },
  methods: {
  }
}
</script>
