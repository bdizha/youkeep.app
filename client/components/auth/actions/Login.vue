<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <label v-show="instruction" for="r-user-login" class="r-text-sm r-text-label">{{ instruction }}</label>
      <a-button id="r-user-login"
                v-on:click="onModal"
                block
                :size="size"
                type="secondary"
                class="r-btn-secondary"
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
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'login'

      this.$store.dispatch('base/onModal', modal)
    },
  },
  watch: {},
}
</script>
