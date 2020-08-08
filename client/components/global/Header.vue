<template>
  <a-layout-header :class="{'r-switch-primary': isDark}" class="r-header">
    <r-layout-menu v-if="!modal.isVisible && !isRaised && !hasShop">
      <r-menu-item @click="onDrawer('store-left')" class="__menu">
        <a-icon style="font-size: 18px;" type="menu"/>
      </r-menu-item>
      <r-menu-item class="__logo">
        <r-logo></r-logo>
      </r-menu-item>
      <r-menu-item class="r-hide-sm r-menu-item__store-switch">
        <r-store-switch></r-store-switch>
      </r-menu-item>
      <r-menu-item class="r-hide-sm r-menu-item__search">
        <r-search></r-search>
      </r-menu-item>
      <r-menu-item class="r-hide-sm">
        <r-menu></r-menu>
      </r-menu-item>
      <r-menu-item class="">
        <r-cart-count></r-cart-count>
      </r-menu-item>
    </r-layout-menu>
    <r-layout-menu v-if="modal.isVisible || isRaised" class="r-layout-menu r-layout-menu-modal">
      <r-menu-item v-on:click="onModalClose" class="__menu">
        <a-icon style="font-size: 21px;" type="left"/>
      </r-menu-item>
      <r-menu-item class="__logo">
        <div v-on:click="onModalClose" class="r-logo">
          <img :src="'/assets/' + (isDark ? 'icon_white': 'icon_primary') + '.svg'"
               alt="Kshopit - It's Shopping Time!"/>
        </div>
      </r-menu-item>
    </r-layout-menu>
    <r-drawer></r-drawer>
    <r-modal></r-modal>
  </a-layout-header>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-header',
  data() {
    return {
      formStore: this.$form.createForm(this, {name: 'form_store'}),
      deliveryOption: 1,
    }
  },
  computed: mapGetters({
    hasShop: 'base/hasShop',
    cart: 'cart/cart',
    modal: 'base/modal',
    address: 'account/address',
    store: 'shop/store',
    processes: 'base/processes',
    stores: 'base/stores',
    drawer: 'base/drawer',
    hasStoreTray: 'base/hasStoreTray',
    isDark: 'base/isDark',
    isRaised: 'base/isRaised',
    search: 'base/search',
    isSearching: 'base/isSearching',
    hasCategories: 'shop/hasCategories',
    isLoggedIn: 'auth/isLoggedIn',
  }),
  created() {
    console.log('How many stores have we got?', this.stores.length);

    this.onStores();
  },
  methods: {
    onModalClose() {
      this.$store.dispatch('base/onIsRaised', false);

      let modal = {}
      modal.isVisible = false;
      modal.current = null;

      this.$store.dispatch('base/onModal', modal);
    },
    onDelivery() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'delivery';
      this.$store.dispatch('base/onModal', modal);
    },
    onDrawer(current) {
      let drawer = {};
      drawer.current = current;
      drawer.placement = 'left';
      drawer.isVisible = true;
      this.$store.dispatch('base/onDrawer', drawer);
    },
    onSearch() {
      let isSearching = !this.isSearching;
      this.$store.dispatch('onSearch', isSearching);
    },
    async onFlushCategory() {
      let fetchBy = {
        id: 1
      };
      await this.$store.dispatch('base/onFlushCategory', fetchBy);
    },
    async onFlushCategories() {
      let fetchBy = {
        category_id: 1,
        limit: 24,
        with: ['photos']
      };
      await this.$store.dispatch('base/onFlushCategories', fetchBy);
    },
    async onStores() {
      let params = {
        category_id: null,
        limit: 24
      };

      await this.$store.dispatch('base/onStores', params);
    }
  },
};
</script>
