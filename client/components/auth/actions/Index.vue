<template>
  <a-row v-show="!hasMenuCategory && !isLoggedIn" type="flex" justify="center"
         align="middle"
  >
    <a-col class="r-pv-12 r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row type="flex" :gutter="[12,12]" justify="start" align="middle">
        <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
          <r-auth-actions-login size="large" :instruction="'Have an account?'"></r-auth-actions-login>
        </a-col>
        <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
          <r-auth-actions-register size="large" :instruction="'New here?'"></r-auth-actions-register>
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
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    },
  },
}
</script>
