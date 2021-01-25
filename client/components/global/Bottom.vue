<template>
  <a-layout-header v-show="true" class="r-hide-lg r-layout-bottom">
    <a-row type="flex" justify="center">
      <a-col type="flex" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 6 }" :sm="{ span: 6 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <div @click="onDrawer('store-menu')" class="r-nav-item r-nav-item__menu">
              <a-icon style="font-size: 18px;" type="compass"/>
              <span class="r-icon-text">
                                Explore
                            </span>
            </div>
          </a-col>
          <a-col @click="onDrawer('store-right')" :xs="{ span: 6 }"
                 :sm="{ span: 6 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <div class="r-nav-item r-nav-item__menu">
              <a-icon style="font-size: 18px;" type="shop"/>
              <span class="r-icon-text">
                                Stores
                            </span>
            </div>
          </a-col>
          <a-col @click="onDrawer('store-right')" :xs="{ span: 6 }"
                 :sm="{ span: 6 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <div class="r-nav-item r-nav-item__menu">
              <a-icon style="font-size: 18px;" type="gift"/>
              <span class="r-icon-text">
                                List
                            </span>
            </div>
          </a-col>
          <a-col @click="onDrawer('store-account')"
                 :xs="{ span: 6 }" :sm="{ span: 6 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }">
            <div class="r-nav-item r-nav-item__menu">
              <a-icon style="font-size: 18px;" type="bars"/>
              <span class="r-icon-text">
                                More
                            </span>
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
  name: 'r-bottom',
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
    onDrawer(current) {
      let drawer = {};
      drawer.current = current;
      drawer.isVisible = true;
      this.$store.dispatch('base/onDrawer', drawer);
    },
    onSearch() {
      let drawer = {};
      drawer.current = 'category';
      drawer.isVisible = true;
      this.$store.dispatch('base/onDrawer', drawer);
    }
  },
  watch: {},
};
</script>
