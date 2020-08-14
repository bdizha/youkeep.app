<template>
  <div :class="{'r-store-flex__has-notice': hasNotice}" class="r-store-flex">
    <div class="r-store-fixed">
      <r-store-notice v-if="hasNotice"></r-store-notice>
      <r-delivery-form size="default"
                       :is-store="true"
                       :has-submit="false"></r-delivery-form>
      <a-list class="r-margin-vertical-12" :data-source="links">
        <a-list-item class="r-list-item" slot="renderItem"
                     slot-scope="item, index">
          <template v-if="!item.modal">
            <router-link class="r-text-link" :to="item.link">
              <a-avatar shape="square" :icon="item.icon"/>
              {{ item.label }}
            </router-link>
          </template>
          <template v-if="item.modal">
            <router-link :to="item.link"
                         @click.native="onModal(item.modal)"
                         class="r-text-link">
              <a-avatar shape="square" :icon="item.icon"/>
              {{ item.label }}
            </router-link>
          </template>
        </a-list-item>
      </a-list>
      <r-store-list></r-store-list>
    </div>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

const LINKS = [
  {
    label: 'Home',
    icon: 'home',
    link: '/',
    modal: null
  },
  {
    label: 'Explore',
    icon: 'compass',
    link: '/stores/all',
  },
  {
    label: 'What\'s new',
    icon: 'gift',
    link: '/stores/new',
  },
  {
    label: 'Highlights',
    icon: 'fire',
    link: '/stores/hot',
    modal: null
  },
  {
    label: 'Wishlist',
    icon: 'heart',
    link: '/wishlist',
    modal: 'wishlist'
  },
  {
    label: 'Timeline',
    icon: 'clock-circle',
    link: '/timeline',
    modal: 'timeline'
  }
];

export default {
  name: 'r-store-menu',
  props: {},
  data() {
    return {
      links: LINKS,
    };
  },
  computed: mapGetters({
    user: 'auth/user',
    flush: 'base/flush',
    hasNotice: 'base/hasNotice',
  }),
  created() {
    this.onStores();
    this.onStoreCategories();
  },
  methods: {
    async payload() {
    },
    async onStoreCategories() {
      let payload = {
        category_id: null,
        store_id: 0,
        limit: 24
      };
      await this.$store.dispatch('base/onCategories', payload);
    },
    async onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    },

    async onStores() {
      let params = {
        category_id: null,
        limit: 24
      };

      await this.$store.dispatch('base/onStores', params);
    }
  },
}
</script>
