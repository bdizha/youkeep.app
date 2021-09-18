<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="gutter-row"
    >
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card style="width: 100%;" title="YOUR sellers">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }" class="r-store-page"
              >
                <div class="r-text-s">
                  <template v-if="hassellers">
                    Here you can manage all your sellers.
                  </template>
                  <template v-if="!hassellers">
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
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal',
    sellers: 'account/sellers',
    hassellers: 'account/hassellers'
  }),
  methods: {
    created () {
    }
  }
}
</script>
