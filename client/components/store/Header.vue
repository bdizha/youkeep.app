<template>
  <div class="r-header" :class="{'r-header-dark': false}">
    <a-row align="middle" justify="start" style="width: 100%;" type="flex">
      <a-col :span="24" type="flex">
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col>
            <div class="r-nav-item r-nav-item__logo">
              <r-logo :is-icon="true"></r-logo>
            </div>
          </a-col>
          <a-col>
            <div class="r-nav-item">
              <div style="padding: 3px;" class="r-bg-primary-secondary r-border-radius-12">
                <a-row align="middle" justify="center" type="flex">
                  <a-col>
                    <p class="r-text-normal r-ph-18 r-pv-9">
                      Delivery
                    </p>
                  </a-col>
                  <a-col>
                    <p class="r-text-normal r-ph-18 r-pv-9 r-bg-white r-border-radius-12">
                      Pickup
                    </p>
                  </a-col>
                </a-row>
              </div>
            </div>
          </a-col>
          <a-col>
            <div class="r-nav-item">
              <r-delivery-search size="default" :has-button="false"></r-delivery-search>
            </div>
          </a-col>
          <a-col v-if="hasStore">
            <div class="r-nav-item">
              <nuxt-link :to="'/store/' + store.slug">
                <a-button block
                          class="r-btn-dark"
                          type="secondary"
                >
                  {{ store.name }}
                </a-button>
              </nuxt-link>
            </div>
          </a-col>
          <a-col flex="auto">
            <div class="r-nav-item">
              <r-search size="default" :has-button="false"></r-search>
            </div>
          </a-col>
          <a-col>
            <r-nav :has-nav="false"></r-nav>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-drawer v-if="hasStore"></r-drawer>
  </div>
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
    const payload = {
      category_id: null,
      limit: process.env.APP_LIMIT
    }

    await this.$store.dispatch('base/onSellers', payload)
  },
  data () {
    return {
      deliveryType: 1,
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
