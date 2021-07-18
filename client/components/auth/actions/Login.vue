<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <label v-show="instruction" class="r-text-sm r-text-label" for="r-user-login">{{ instruction }}</label>
      <a-button id="r-user-login"
                :size="size"
                block
                class="r-btn-secondary"
                type="secondary"
                v-on:click="onModal"
      >
        <a-icon type="user"/>
        Sign in
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-auth-actions-login',
  props: {
    instruction: { type: String, required: false, default: null },
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {}
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'login'

      this.$store.dispatch('base/onModal', modal)
    },
  },
  watch: {},
}
</script>
