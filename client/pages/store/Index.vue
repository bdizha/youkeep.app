<template>
  <a-row :gutter="[48,48]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-yellow-light r-pull-h-24 r-border-none">
        <div class="r-mv-96">
          <a-row :gutter="[48,48]" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                       Spazastop favorites
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        A <span class="r-text-secondary">better</span> way to shop
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Online and in real life. Discover all the stores where you can safely shop and pay with Spazastop.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col v-if="false" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/images/icon.svg" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h3 class="r-heading">
            Top Deals
          </h3>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            Offers
          </a-button>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            In-store
          </a-button>
        </a-col>
        <a-col>
          <a-button block
                    class="r-btn-bordered-secondary"
                    size="default"
                    type="secondary"
          >
            Sort by: Relevancy
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-store-categories></r-store-categories>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  name: 'r-store',
  props: {},
  async asyncData ({ store, params, query }) {
    console.log('>>>> params', params)
    console.log('>>>> query', query)

    const route = `/stores`
    params.route = route
    params.with = ['stores']
    await store.dispatch('base/onStoreCategories', params)

    console.log(route, 'route')
  },
  data () {
    return {}
  },
  computed: mapGetters({
  }),
  created () {
  },
  methods: {}
}
</script>⏎
