<template>
  <a-layout-header class="r-hide-lg r-layout-bottom">
    <a-row justify="space-around" type="flex">
      <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
             :sm="{ span: 6 }"
             :xs="{ span: 6 }"
      >
        <div class="r-nav-item r-nav-item__menu" @click="onDrawer('store-menu')">
          <a-icon style="font-size: 18px;" type="compass"/>
          <span class="r-icon-text">
                                Explore
                            </span>
        </div>
      </a-col>
      <a-col :lg="{ span: 6 }"
             :md="{ span: 6 }"
             :sm="{ span: 6 }"
             :xs="{ span: 6 }"
      >
        <div class="r-nav-item r-nav-item__menu" @click="onDrawer('store-right')">
          <a-icon style="font-size: 18px;" type="shop"/>
          <span class="r-icon-text">
                                Stores
                            </span>
        </div>
      </a-col>
      <a-col :lg="{ span: 6 }"
             :md="{ span: 6 }"
             :sm="{ span: 6 }"
             :xs="{ span: 6 }"
      >
        <div class="r-nav-item r-nav-item__menu" @click="onDrawer('store-right')">
          <a-icon style="font-size: 18px;" type="gift"/>
          <span class="r-icon-text">
                                List
                            </span>
        </div>
      </a-col>
      <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
             :sm="{ span: 6 }"
             :xs="{ span: 6 }"
      >
        <div class="r-nav-item r-nav-item__menu"
             @click="onDrawer('store-account')"
        >
          <a-icon style="font-size: 18px;" type="bars"/>
          <span class="r-icon-text">
                                More
                            </span>
        </div>
      </a-col>
    </a-row>
  </a-layout-header>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-bottom',
  components: {},
  props: {
    isShow: { type: Boolean, required: false }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal',
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onDrawer (current) {
      let drawer = {}
      drawer.current = current
      drawer.isVisible = true
      this.$store.dispatch('base/onDrawer', drawer)
    },
    onSearch () {
      let drawer = {}
      drawer.current = 'category'
      drawer.isVisible = true
      this.$store.dispatch('base/onDrawer', drawer)
    }
  },
  watch: {},
}
</script>
