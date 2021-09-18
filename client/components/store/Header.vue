<template>
  <a-layout-header class="r-header r-store-header">
    <a-row align="middle" justify="start" style="width: 100%;" type="flex">
      <a-col :span="24" type="flex">
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                 :sm="{ span: 12 }"
                 :xs="{ span: 12 }"
          >
            <div class="r-nav-item r-nav-item__logo">
              <r-logo :is-icon="true"></r-logo>
            </div>
          </a-col>
          <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                 :sm="{ span: 12 }"
                 :xs="{ span: 12 }"
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

    await this.$store.dispatch('base/onsellers', payload)
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
