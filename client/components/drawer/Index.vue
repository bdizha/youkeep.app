<template>
  <a-drawer :class="'r-drawer-' + drawer.current"
    :placement="drawer.placement"
    @close="onClose"
    :visible="drawer.isVisible">
    <div style="margin-right: 45px;" slot="title">
      <a-row type="flex" justify="start" align="middle">
        <a-col @click="onClose" :xs="{span: 6}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
          <r-nav-item v-if="drawer.current == 'cart'" class="r-nav-item">
            <r-cart-count></r-cart-count>
          </r-nav-item>
          <r-nav-item v-if="drawer.current != 'cart'" class="r-nav-item">
            <div class="r-logo">
              <img :src="'/assets/icon.svg'"
                   alt="Kshopit - It's Shopping Time!"/>
            </div>
          </r-nav-item>
        </a-col>
        <a-col class="r-text-right r-ph-24"
               :xs="{span: 18}"
               :sm="{span: 18}"
               :md="{span: 12}"
               :lg="{span: 18}">
          <h4 class="r-same-height r-heading">Hi, {{ isLoggedIn ? user.first_name : 'Guest' }}</h4>
        </a-col>
      </a-row>
    </div>
    <r-auth-actions v-if="drawer.current !== 'cart'"></r-auth-actions>
    <r-category-drawer v-if="isCurrent('category')"
                       v-bind:key="'category'" class="r-animate"></r-category-drawer>
    <r-cart-drawer v-if="isCurrent('cart')"
                   v-bind:key="'cart'" class="r-animate"></r-cart-drawer>
    <r-store-drawer v-if="isCurrent('store')"
                         v-bind:key="'store'" class="r-animate"></r-store-drawer>
    <r-account-drawer v-if="isCurrent('account')"
                      v-bind:key="'category'" class="r-animate"></r-account-drawer>
    <r-drawer-menu v-if="isCurrent('menu')"
                   v-bind:key="'menu'" class="r-animate"></r-drawer-menu>
  </a-drawer>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-drawer',
  props: {
    hasFooter: {type: Boolean, required: false, default: false},
    maskClosable: {type: Boolean, required: false, default: true},
    closable: {type: Boolean, required: false, default: true},
    current: {type: String, required: false, default: null},
    cssClass: {type: String, required: false, default: null},
    redirectTo: {type: String, required: false, default: null},
  },
  data() {
    return {};
  },
  created() {
    this.payload();
  },
  computed: mapGetters({
    drawer: 'base/drawer',
    user: 'auth/user',
    isLoggedIn: 'auth/isLoggedIn',
    store: 'shop/store',
  }),
  methods: {
    isCurrent(current) {
      return this.drawer.current === current;
    },
    payload() {
      let $this = this;
    },
    async onClose(event) {
      let drawer = {};
      drawer.isVisible = false;
      drawer.placement = 'left';
      drawer.current = null;

      await this.$store.dispatch('base/onDrawer', drawer);
    }
  },
};
</script>
