<template>
  <a-layout-header class="r-header r-store-header">
    <a-row style="width: 100%;" type="flex" justify="start" align="middle">
      <a-col type="flex" :span="24">
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :md="{ span: 6 }"
                 :lg="{ span: 6 }"
          >
            <div class="r-nav-item r-nav-item__logo">
              <r-logo :is-icon="true"></r-logo>
            </div>
          </a-col>
          <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :md="{ span: 18 }"
                 :lg="{ span: 18 }"
          >
            <div class="r-layout-menu">
              <div v-if="hasStore" class="r-nav-item">
                <nuxt-link :to="'/store/' + store.slug">
                  <a-button block
                            class="r-btn-dark"
                            type="secondary"
                  >
                    {{ store.name }}
                  </a-button>
                </nuxt-link>
              </div>
              <div class="r-hide-sm r-nav-item r-nav-item__search">
                <r-search></r-search>
              </div>
              <div class="r-hide-sm r-nav-item">
                <r-nav></r-nav>
              </div>
              <div class="r-nav-item">
                <r-cart-count></r-cart-count>
              </div>
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-drawer v-if="hasStore"></r-drawer>
  </a-layout-header>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-header',
  components: {},
  props: {
    isShow: { type: Boolean, required: false },
  },
  async fetch () {
    let payload = {
      category_id: null,
      limit: process.env.APP_LIMIT
    }

    await this.$store.dispatch('base/onStores', payload)
  },
  data () {
    return {
      hasData: false
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: 'base/processes'
  }),
  created () {
    this.hasData = true
  },
  methods: {
    payload () {
    },
  },
  watch: {},
}
</script>
