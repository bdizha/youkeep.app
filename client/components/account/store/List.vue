<template>
  <a-row class="r-account-list" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-store v-if="hasTitle" class="r-mb-24" style="width: 100%;" title="YOUR STORES">
        <a-row align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }" class="r-store-page"
          >
            <div class="r-text-small">
              <template v-if="hasStores">
                Here you can manage all your stores.
              </template>
              <template v-if="!hasStores">
                You don't have a store set up yet.
              </template>
            </div>
          </a-col>
        </a-row>
      </a-store>
      <div v-for="store in stores"
           :key="'address-' + store.id"
           :class="{'r-account-item__active': store.is_active}"
           class="r-account-item"
           v-on:click="onModal('account-store', store)"
      >
        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 16 }"
                 :xs="{ span: 16 }"
          >
            <a-row :gutter="24" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                Store Name
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                {{ store.name }}
              </a-col>
            </a-row>
            <a-row :gutter="24" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                Tagline
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                {{ store.description }}
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-switch :default-checked="Boolean(store.is_active)" size="small"/>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-avatar icon="edit" shape="square"/>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row justify="end" type="flex">
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-button block
                    class="r-btn-secondary"
                    html-type="button"
                    size="large"
                    type="secondary"
                    @click="onModal('store-form')"
          >
            Add new
          </a-button>
        </a-col>
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-button block
                    class="r-btn-secondary"
                    html-type="button"
                    size="large"
                    type="secondary"
                    @click="onModal('store-catalog-map')"
          >
            Configure Catalog Mapping
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
  props: {
    hasTitle: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal',
    stores: 'account/stores',
    hasStores: 'account/hasStores'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      this.onStores()
    },
    async onStores () {
      await this.$store.dispatch('account/onStores')
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      // this.$store.dispatch('account/onStore', store)
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
