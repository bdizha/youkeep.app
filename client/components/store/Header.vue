<template>
  <a-layout-header v-show="!modal.isVisible" class="r-header r-store-header">
    <a-row style="width: 100%;" type="flex" justify="start">
      <a-col type="flex" class="gutter-row" :span="24">
        <a-row type="flex" justify="center" align="middle">
          <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <div class="r-menu-item r-menu-item__logo">
              <r-logo></r-logo>
            </div>
          </a-col>
          <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :md="{ span: 18 }"
                 :lg="{ span: 18 }">
            <div class="r-layout-menu">
              <div v-if="hasStore" class="r-menu-item r-menu-item__logo">
                <div class="r-store-frame"></div>
                <router-link @click.native="onRight"
                             class="r-logo"
                             :to="store.route">
                  <img :src="store.photo_url"
                       alt="Kshopit - It's Shopping Time!"/>
                </router-link>
              </div>
              <div class="r-hide-sm r-menu-item r-menu-item__search">
                <r-search></r-search>
              </div>
              <div class="r-hide-sm r-menu-item">
                <r-menu></r-menu>
              </div>
              <div class="r-menu-item">
                <r-cart-count></r-cart-count>
              </div>
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </a-layout-header>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-header',
  components: {},
  props: {
    isShow: {type: Boolean, required: false},
  },
  data() {
    return {};
  },
  computed: mapGetters({
    modal: 'base/modal',
    store: 'shop/store',
    hasStore: 'shop/hasStore',
    processes: 'base/processes'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onRight() {
      let drawer = {};
      drawer.current = 'store-right';
      drawer.isVisible = true;
      this.$store.dispatch('base/onDrawer', drawer);
    }
  },
  watch: {},
};
</script>
