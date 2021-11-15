<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[96, 96]" align="middle" justify="start" type="flex">
            <a-col v-for="(metric, index) in metrics"
                   :key="index"
                   :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" class="r-slider" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" justify="space-between" type="flex">
                    <a-col flex="1 1 0">
                      <h4 class="r-heading r-text-white">
                        {{ metric.title }}
                      </h4>
                    </a-col>
                    <a-col>
                      <nuxt-link :to="metric.route">
                        <a-button size="small"
                                  block
                                  class="r-btn-bordered-tertiary"
                                  type="secondary"
                        >
                          See all
                          <a-icon type="right"/>
                        </a-button>
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :span="24" class="r-slider">
                  <div class="r-spin-holder">
                    <r-product-slider :is-drop="isDrop" :filters="{category_id: metric.id}"></r-product-slider>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-product-metrics',
  components: {},
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    hasCategories: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: 'Just dropped in' },
    columns: { type: Number, required: false, default: 3 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          metric_type_id: null,
          store_id: null,
          is_active: true,
          order_by: 'updated_at'
        }
      }
    }
  },
  data () {
    return {
      metrics: [
        {
          route: '/asset/just-dropped-in',
          title: 'Just dropped in',
          id: null
        },
        {
          route: '/asset/trending-nfts',
          title: 'Trending NFTs',
          id: null
        },
        {
          route: '/asset/recently-added',
          title: 'Recently added',
          id: null
        }
      ]
    }
  },
  methods: {}
}
</script>
