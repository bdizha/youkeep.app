<template>
  <a-row v-show="!hasMenuCategory && !isLoggedIn" align="middle" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <r-auth-actions-login :instruction="'Have an account?'" size="large"></r-auth-actions-login>
        </a-col>
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <r-auth-actions-register :instruction="'New here?'" size="large"></r-auth-actions-register>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-auth-actions',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    isLoggedIn: 'auth/isLoggedIn',
    hasMenuCategory: 'base/hasMenuCategory'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    },
  },
}
</script>
