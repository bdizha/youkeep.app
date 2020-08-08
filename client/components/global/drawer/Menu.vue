<template>
  <r-drawer-template placement="left"
                     current="store-left">
    <div :class="{'r-store-flex__has-notice': hasNotice}" class="r-store-flex">
      <div class="r-store-fixed">
        <r-store-notice v-if="hasNotice"></r-store-notice>
        <r-store-shop-now css-class="r-padding-vertical-24" :span="11"></r-store-shop-now>
        <a-list :data-source="links">
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
        <r-delivery-form size="default"
                         :is-store="true"
                         :has-submit="false"></r-delivery-form>
        <r-store-list></r-store-list>
      </div>
    </div>
  </r-drawer-template>
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
    link: '/stores',
  },
  {
    label: 'Highlights',
    icon: 'fire',
    link: '/store/athome/category/highlights',
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
  name: 'r-drawer-menu',
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
