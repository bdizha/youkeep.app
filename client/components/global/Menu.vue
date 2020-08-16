<template>
  <div :class="{'r-store-flex__has-notice': hasNotice}" class="r-store-flex">
    <r-store-notice v-if="hasNotice"></r-store-notice>
    <r-delivery-form size="default"
                     :is-store="true"
                     :has-submit="false"></r-delivery-form>
    <a-list :data-source="links">
      <a-list-item class="r-list-item" slot="renderItem"
                   slot-scope="item, index">
        <template v-if="!item.modal">
          <nuxt-link class="r-text-link" :to="item.link">
            <a-avatar shape="square" :icon="item.icon"/>
            {{ item.label }}
          </nuxt-link>
        </template>
        <template v-if="item.modal">
          <nuxt-link :to="item.link"
                     @click.native="onModal(item.modal)"
                     class="r-text-link">
            <a-avatar shape="square" :icon="item.icon"/>
            {{ item.label }}
          </nuxt-link>
        </template>
      </a-list-item>
    </a-list>
    <r-store-list></r-store-list>
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
    label: 'Highlights',
    icon: 'fire',
    link: '/stores/hot',
    modal: null
  },
  {
    label: 'What\'s new',
    icon: 'gift',
    link: '/stores/new',
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
  name: 'r-menu',
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
    this.payload();
  },
  methods: {
    async payload() {
    },
    async onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    }
  },
}
</script>

