<template>
  <a-row :gutter="[48, 48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row class="r-store-meta" align="middle" justify="start" type="flex">
        <a-col
          :lg="{ span: 24 }"
          :md="{ span: 24 }"
          :sm="{ span: 24 }"
          :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-p-0 r-border-none">
            <a-row :gutter="[24, 24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div :style="getPhotoCoverStyle()" class="r-pull">
                  <div class="r-block" style="height: 300px;">&nbsp;</div>
                </div>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col class="r-store-meta"
               :lg="{ span: 24 }"
               :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-p-0 r-border-none">
            <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <div class="r-ph-24" style="min-height: 111px;">
                      <a-row :gutter="[24, 24]" align="middle" justify="end" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-store-photo" :class="getBgClass()">
                            <r-store-head :size="150" :has-title="false" :store="store"></r-store-head>
                          </div>
                        </a-col>
                        <a-col>
                          <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
                            <a-col class="r-asset-actions">
                              <a-button block
                                        class="r-btn-dark"
                                        size="large"
                                        type="secondary"
                              >
                                <a-icon type="heart" theme="filled"></a-icon>
                                <span class="r-text-action">
                        {{ 24 }}
                        </span>
                              </a-button>
                            </a-col>
                            <a-col class="r-asset-actions">
                              <a-button block
                                        class="r-btn-dark"
                                        size="large"
                                        type="secondary"
                              >
                                <a-icon type="star" theme="filled"></a-icon>
                                <span class="r-text-action">
                        {{ 4.8 }}
                        </span>
                              </a-button>
                            </a-col>
                            <a-col class="r-asset-actions">
                              <a-button block
                                        class="r-btn-dark"
                                        size="large"
                                        type="secondary"
                              >
                                <a-icon type="share-alt"></a-icon>
                                <span class="r-text-action">
                          Share
                        </span>
                              </a-button>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col>
                    <p class="r-text-medium">
                      {{ store.name }}
                    </p>
                  </a-col>
                  <a-col>
                    <p class="r-text-medium">
                      {{ store.created_at }}
                    </p>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-store-tabs></r-store-tabs>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  components: {},
  props: {},
  data () {
    return {}
  },
  async asyncData ({ store, params }) {
    try {
      const route = `/store/${params.slug}`
      await store.dispatch('shop/onStore', route)

      const payload = {
        store: params.slug,
        level: 1,
        order_by: 'randomized_at',
        limit: process.env.APP_LIMIT,
        with: ['breadcrumbs', 'photos', 'products']
      }
      await store.dispatch('base/onCategories', payload)
    } catch (e) {
      console.error('onStore errors')
      console.log(e)
    }
  },
  created () {
  },
  computed: {
    ...mapGetters({
      store: 'base/store',
      hasStore: 'base/hasStore',
      processes: 'base/processes',
      hasCategories: 'base/hasCategories'
    })
  },
  methods: {
    getBgClass () {
      return `r-bg-primary-light`
    },
    getPhotoCoverStyle () {
      return `background-image: url(/patterns/pattern-06.svg);`
    }
  }
}
</script>
