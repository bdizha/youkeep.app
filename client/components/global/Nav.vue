<template>
  <a-row type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}">
      <a-menu theme="light"
              mode="horizontal"
              :defaultSelectedKeys="['2']">
        <a-sub-menu>
          <div slot="title">
            <nuxt-link class="r-text-link" to="/help">
              <a-icon type="question-circle"/>
              Help center
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div v-if="!isLoggedIn" @click="onModal" slot="title">
            <a-icon type="user"/>
            Sign in
          </div>
          <div v-if="isLoggedIn" @click="onDrawer" slot="title">
            <a-icon type="user"/>
            Account
          </div>
        </a-sub-menu>
      </a-menu>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-nav',
  data() {
    return {}
  },
  computed: mapGetters({
    user: 'auth/user',
    cart: 'cart/cart',
    modal: 'base/modal',
    store: 'shop/store',
    drawer: 'base/drawer',
    isRaised: 'base/isRaised',
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onDrawer() {
      let drawer = {};
      drawer.current = 'account';
      drawer.isVisible = true;

      this.$store.dispatch('base/onDrawer', drawer);
    },
    onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'login';
      this.$store.dispatch('base/onModal', modal);
    },
  }
};
</script>
