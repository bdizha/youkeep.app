<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card style="width: 100%;" title="YOUR STORES">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
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
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" justify="end" type="flex">
            <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
              <a-button block
                        class="r-btn-bordered-secondary"
                        html-type="button"
                        type="secondary"
                        @click="onModal('store-form')"
              >
                Add new
              </a-button>
            </a-col>
            <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
              <a-button block
                        class="r-btn-secondary"
                        html-type="button"
                        type="secondary"
                        @click="onModal('store-catalog-map')"
              >
                Configure Mapping
              </a-button>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-store-list></r-account-store-list>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'account',
  components: {},
  data () {
    return {
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    stores: 'account/stores',
    hasStores: 'account/hasStores'
  }),
  methods: {
    created () {
    }
  }
}
</script>
