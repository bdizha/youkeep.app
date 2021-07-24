<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-store-page"
    >
      Show case some steps here..
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  components: {},
  data () {
    return {}
  },
  computed: mapGetters({
    user: 'auth/user'
  }),
  created () {
  },
  methods: {
    payload () {
      // onUser
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
