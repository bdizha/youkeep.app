<template>
  <a-row type="flex" justify="end">
    <a-col :xs="{ span: 12 }" :sm="{ span: 8 }" :md="{ span: 6 }" :lg="{ span: 6 }">
      <a-button @click="onModal"
                block
                size="large"
                type="secondary"
                html-type="button"
                class="r-btn-secondary"
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
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'account-card'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
