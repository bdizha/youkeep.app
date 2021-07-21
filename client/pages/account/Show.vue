<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="r-store-page" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
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
