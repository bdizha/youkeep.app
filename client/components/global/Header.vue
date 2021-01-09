<template>
  <a-layout-header :class="{'r-switch-primary': isDark}" class="r-header">
    <r-layout-menu v-if="!modal.isVisible && !isRaised && !hasShop">
      <r-nav-item>
        <a-icon class="r-text-white" @click="onDrawer('menu')" type="menu"/>
      </r-nav-item>
      <r-nav-item class="r-nav-item__logo r-p-r-0">
        <r-logo></r-logo>
      </r-nav-item>
      <r-nav-item class="r-hide-sm r-nav-item__store-switch">
        <r-store-switch v-if="!hasStore"></r-store-switch>
        <div v-if="hasStore" class="r-nav-item">
          <nuxt-link :to="'/store/' + store.slug">
            <a-button block
                      class="r-btn-bordered-grey"
                      type="secondary">
              {{ store.name }}
            </a-button>
          </nuxt-link>
        </div>
      </r-nav-item>
      <r-nav-item class="r-hide-sm r-nav-item__search">
        <r-search></r-search>
      </r-nav-item>
      <r-nav-item class="r-hide-sm">
        <r-nav></r-nav>
      </r-nav-item>
      <r-nav-item>
        <r-cart-count></r-cart-count>
      </r-nav-item>
    </r-layout-menu>
    <r-layout-menu v-if="modal.isVisible || isRaised" class="r-layout-menu r-layout-menu-modal">
      <r-nav-item class="r-nav-item__text">
        <a-button v-on:click="onModalClose"
                  size="default"
                  type="secondary" html-type="button">
          <a-icon type="left"/>
          Back
        </a-button>
      </r-nav-item>
      <r-nav-item class="r-nav-item__logo">
        <div v-on:click="onModalClose" class="r-logo">
          <img :src="'/assets/' + (isDark ? 'icon_white': 'icon_secondary') + '.svg'"
               alt="Shopple - It's Shopping Time!"/>
        </div>
      </r-nav-item>
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
    hasStore: 'base/hasStore',
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

      console.log('current', current);

      this.$store.dispatch('base/onDrawer', drawer);
    },
    onSearch() {
      let isSearching = !this.isSearching;
      this.$store.dispatch('onSearch', isSearching);
    },
    async onStores() {
      let payload = {
        category_id: null,
        limit: 24
      };

      await this.$store.dispatch('base/onStores', payload);
    }
  },
};
</script>
