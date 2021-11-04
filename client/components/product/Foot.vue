<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" justify="center" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
            <a-col flex="1 1 0">
              <nuxt-link :to="product.store.route" class="r-text-white">
                <r-store-head :store="product.store"></r-store-head>
              </nuxt-link>
            </a-col>
            <a-col class="r-asset-actions">
              <a-button block
                        class="r-btn-dark"
                        size="small"
                        type="secondary"
              >
                <a-icon type="picture" theme="filled"></a-icon>
                <span class="r-text-action">
                  {{ 125 }}
                </span>
              </a-button>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="!isDrop" :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
                <a-col :lg="{ span: 9 }" :md="{ span: 9}"
                       :sm="{ span: 9 }"
                       :xs="{ span: 9 }"
                >
                  <div class="r-text-xs r-text-light">
                    Price
                  </div>
                </a-col>
                <a-col class="r-text-right" :lg="{ span: 15 }" :md="{ span: 15}"
                       :sm="{ span: 15 }"
                       :xs="{ span: 15 }"
                >
                  <r-product-price :product="product"></r-product-price>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
                <a-col :lg="{ span: 9 }" :md="{ span: 9}"
                       :sm="{ span: 9 }"
                       :xs="{ span: 9 }"
                >
                  <p class="r-text-xs r-text-light">
                    Activity
                  </p>
                </a-col>
                <a-col class="r-text-right" :lg="{ span: 15 }" :md="{ span: 15}"
                       :sm="{ span: 15 }"
                       :xs="{ span: 15 }"
                >
                  <div class="r-text-xs r-text-light">
                    {{ product.activity }}
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[12,12]" justify="space-between" align="middle" type="flex">
                <a-col class="r-asset-actions">
                  <a-button block
                            class="r-btn-dark"
                            size="small"
                            type="secondary"
                  >
                    <a-icon type="shopping" theme="filled"></a-icon>
                    <span class="r-text-action">
                          Collect
                        </span>
                  </a-button>
                </a-col>
                <a-col class="r-asset-actions">
                  <a-button block
                            class="r-btn-dark"
                            size="small"
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
                            size="small"
                            type="secondary"
                  >
                    <a-icon type="star" theme="filled"></a-icon>
                    <span class="r-text-action">
                        {{ 4.8 }}
                        </span>
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="isDrop" :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-medium" style="max-height: 72px; overflow: hidden; min-height: 72px;">
            {{ product.summary }}
          </p>
        </a-col>
        <a-col class="r-asset-actions">
          <a-button block
                    class="r-btn-dark"
                    size="large"
                    type="secondary"
          >
           <h4 class="r-heading">
             <a-icon style="font-size: 24px" type="eye" theme="filled"></a-icon>
             <span class="r-text-action">
                  Track
            </span>
           </h4>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-foot',
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    product: {
      type: Object,
      required: true,
      default: () => {
        return {
          currency: null,
          currency_url: null,
          store: {
            photo_url: '/assets/icon_default.png'
          }
        }
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
