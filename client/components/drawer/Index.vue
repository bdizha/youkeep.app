<template>
  <a-drawer :class="{'r-drawer__dark': isDark}"
            :placement="drawer.placement"
            :visible="drawer.isVisible"
            @close="onClose"
  >
    <div slot="title" style="margin-right: 45px;">
      <r-layout-menu>
        <a-row align="middle" justify="start" type="flex">
          <a-col :lg="{span: 6}" :md="{span: 6}" :sm="{span: 6}" :xs="{span: 6}" @click="onClose">
            <r-nav-item v-if="drawer.current == 'cart'" class="r-nav-item">
              <r-cart-count></r-cart-count>
            </r-nav-item>
            <r-nav-item v-if="drawer.current != 'cart'" class="r-nav-item__logo">
              <r-logo :is-icon="true"></r-logo>
            </r-nav-item>
          </a-col>
          <a-col :lg="{span: 18}"
                 :md="{span: 12}"
                 :sm="{span: 18}"
                 :xs="{span: 18}"
                 class="r-text-right"
          >
            <r-nav-item class="r-nav-item">
              <h4 class="r-heading">Hi, {{ isLoggedIn ? user.first_name : 'Guest' }}</h4>
            </r-nav-item>
          </a-col>
        </a-row>
      </r-layout-menu>
    </div>
    <r-drawer-menu v-if="isCurrent('menu')"
                   v-bind:key="'menu'" class="r-animate"
    ></r-drawer-menu>
    <r-cart-footer v-if="drawer.current == 'cart'"></r-cart-footer>
  </a-drawer>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-drawer',
  props: {
    hasFooter: { type: Boolean, required: false, default: false },
    maskClosable: { type: Boolean, required: false, default: true },
    closable: { type: Boolean, required: false, default: true },
    current: { type: String, required: false, default: null },
    cssClass: { type: String, required: false, default: null },
    redirectTo: { type: String, required: false, default: null },
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    isDark: 'base/isDark',
    drawer: 'base/drawer',
    user: 'auth/user',
    isLoggedIn: 'auth/isLoggedIn',
    store: 'base/store',
  }),
  methods: {
    isCurrent (current) {
      return this.drawer.current === current
    },
    payload () {
      let $this = this
    },
    async onClose (event) {
      let drawer = {}
      drawer.isVisible = false
      drawer.placement = 'left'
      drawer.current = null

      await this.$store.dispatch('base/onDrawer', drawer)
    }
  },
}
</script>
