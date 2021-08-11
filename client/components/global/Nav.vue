<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-menu :defaultSelectedKeys="['2']"
              mode="horizontal"
              theme="light"
      >
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/about-us">
              About
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/zero-sum">
              ZeroSum Fund
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/approach">
              Approach
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/partners">
              Partners
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/partners">
              Contact
            </nuxt-link>
          </div>
        </a-sub-menu>
      </a-menu>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-nav',
  data () {
    return {}
  },
  computed: mapGetters({
    user: 'auth/user',
    cart: 'cart/cart',
    modal: 'base/modal',
    store: 'base/store',
    drawer: 'base/drawer',
    isRaised: 'base/isRaised',
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onDrawer () {
      let drawer = {}
      drawer.current = 'account'
      drawer.isVisible = true

      this.$store.dispatch('base/onDrawer', drawer)
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'login'
      this.$store.dispatch('base/onModal', modal)
    },
  }
}
</script>
