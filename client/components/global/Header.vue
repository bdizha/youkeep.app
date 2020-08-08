<template>
  <a-layout-header :class="{'r-switch-primary': isDark}" class="r-header">
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

      // await this.$store.dispatch('base/onStores', params);
    }
  },
};
</script>
