<template>
  <a-drawer
    :placement="placement"
    @close="onClose"
    :visible="hasDrawer">
    <div style="margin-right: 45px;" slot="title">
      <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
          <r-menu-item v-if="drawer.current == 'cart-drawer'" class="r-menu-item">
            <div class="r-menu-cart">
              <r-shopping-icon></r-shopping-icon>
              <span class="r-menu-cart-count">{{ cart.count }}</span>
            </div>
          </r-menu-item>
          <router-link v-if="drawer.current != 'cart-drawer'" class="r-logo" to="/">
            <img :src="'/images/kshop/logo_red.svg'"
                 alt="Kshop - It's Shopping Time!"/>
          </router-link>
        </a-col>
        <a-col class="r-text-right r-padding-horizontal-24" :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}"
               :lg="{span: 12}">
          <h4 class="r-same-height r-heading r-text-red">Hi, {{ isLoggedIn ? user.first_name : 'Guest' }}</h4>
        </a-col>
      </a-row>
    </div>
    <a-row v-if="!isLoggedIn && drawer.current != 'cart-drawer'" :gutter="24" type="flex" justify="center"
           align="middle">
      <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
        <h4 class="r-text-normal">Have an account?</h4>
        <a-button v-on:click="onModal('login')" block size="default" type="second" class="ant-btn">
          <a-icon type="user"/>
          Sign in
        </a-button>
      </a-col>
      <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
        <h4 class="r-text-normal">New here?</h4>
        <a-button v-on:click="onModal('register')" block size="default" type="second" class="ant-btn">
          <a-icon type="user-add"/>
          Register
        </a-button>
      </a-col>
    </a-row>
    <slot/>
  </a-drawer>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-drawer',
    props: {
      placement: {type: String, required: false, default: 'left'},
      current: {type: String, required: false, default: 'empty'},
    },
    data() {
      return {
        hasData: false,
        collapsed: false,
        hasDrawer: false,
      };
    },
    computed: mapGetters({
      cart: 'cart/cart',
      modal: 'app/modal',
      drawer: 'app/drawer',
      store: 'store/store',
      user: 'app/user',
      isLoggedIn: 'auth/check'
    }),
    mounted() {
      this.payload();
    },
    methods: {
      onClose() {
        let drawer = {
          current: null,
          isVisible: false,
          message: null
        };

        this.$store.dispatch('app/onDrawer', drawer);
      },
      setHasDrawer() {
        this.hasDrawer = this.drawer.isVisible &&
          this.drawer.current == this.current;
      },
      payload() {
        this.setHasDrawer();
      },
      onModal(current) {
        let modal = {};
        modal.isVisible = true;
        modal.current = current;

        this.$store.dispatch('app/onModal', modal);
      },
    },
  }
</script>
