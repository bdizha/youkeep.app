<template>
  <a-row :gutter="[96, 96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="start" type="flex">
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
                <a-card :style="getPhotoCoverStyle" class="r-pull r-bg-dark r-border-none">
                  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 18 }"
                           :xs="{ span: 21 }"
                    >
                      <div class="r-block" style="min-height: 300px;">
                      </div>
                    </a-col>
                  </a-row>
                </a-card>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }"
               :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col class="r-store-meta"
                   :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <div class="r-ph-24">
                    <a-row :gutter="[24, 24]" align="middle" justify="end" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-store-head :size="60"
                                      :has-title="false"
                                      :store="store"
                        ></r-store-head>
                      </a-col>
                      <a-col>
                        <r-store-actions :is-featured="true" :store="store" size="large"></r-store-actions>
                      </a-col>
                    </a-row>
                  </div>
                </a-col>
                <a-col>
                  <p class="r-text-medium r-text-white">
                    {{ store.name }}
                  </p>
                </a-col>
                <a-col>
                  <p class="r-text-medium r-text-white">
                    Joined on {{ store.joined_at }}
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
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="false" :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your artistic taste to the next level."></r-contact-us>
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
    getPhotoCoverStyle () {
      let coverUrl = null
      if (this.store.photo_cover_url) {
        coverUrl = `url(${this.store.photo_cover_url})`
      }
      return `background-image: ${coverUrl};`
    },
    ...mapGetters({
      store: 'shop/store',
      hasStore: 'shop/hasStore',
      products: 'shop/products',
      hasProducts: 'shop/hasProducts',
      processes: 'base/processes'
    })
  },
  methods: {
    getBgClass () {
      return `r-bg-primary-light`
    },
    getPhotoCoverStyle () {
      return `background-image: url(${this.store.photo_cover_url});`
    }
  }
}
</script>
