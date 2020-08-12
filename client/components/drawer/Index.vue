<template>
  <a-drawer
    :placement="drawer.placement"
    @close="onClose"
    :visible="drawer.isVisible">
    <div style="margin-right: 45px;" slot="title">
      <a-row type="flex" justify="start" align="middle">
        <a-col @click="onClose" :xs="{span: 6}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
          <r-menu-item v-if="drawer.current == 'cart'" class="r-menu-item">
            <r-cart-count></r-cart-count>
          </r-menu-item>
          <r-menu-item v-if="drawer.current != 'cart'" class="r-menu-item">
            <div class="r-logo">
              <img :src="'/assets/icon.svg'"
                   alt="Kshopit - It's Shopping Time!"/>
            </div>
          </r-menu-item>
        </a-col>
        <a-col class="r-text-right r-padding-horizontal-24"
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
                       v-bind:key="'category'" class="fade-item"></r-category-drawer>
    <r-cart-drawer v-if="isCurrent('cart')"
                   v-bind:key="'category'" class="fade-item"></r-cart-drawer>
    <r-store-drawer-menu v-if="isCurrent('store-menu')"
                         v-bind:key="'store'" class="fade-item"></r-store-drawer-menu>
    <r-account-drawer v-if="isCurrent('account')"
                      v-bind:key="'category'" class="fade-item"></r-account-drawer>
    <r-drawer-menu v-if="isCurrent('menu')"
                   v-bind:key="'menu'" class="fade-item"></r-drawer-menu>
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
