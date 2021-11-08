<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" justify="center" align="middle" type="flex">
        <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}"
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
                        :class="getBtnClass()"
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
        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <div class="r-store-photo" :class="getBgClass()">
                <r-store-head :size="60" :has-title="false" :store="store"></r-store-head>
              </div>
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
              <a-row justify="start" align="top" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-xs r-text-light r-ellipsis">
                    {{ store.name }}
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-xs r-text-white r-ellipsis">
                    {{ product.name }}
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[12,12]" justify="start" align="top" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-text-xs r-text-light">
                        Price
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-product-price :product="product"></r-product-price>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-text-xs r-text-light">
                        Status
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-text-xs r-text-white">
                        Auction
                      </div>
                    </a-col>
                  </a-row>
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
                    <a-icon type="eye" theme="filled"></a-icon>
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
        <a-col v-if="isDrop" class="r-asset-actions">
          <a-button block
                    :class="getBtnClass()"
                    size="large"
                    type="secondary"
          >
            <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
              <a-col flex="24">
                <a-icon style="font-size: 24px;" type="eye" theme="filled"></a-icon>
              </a-col>
              <a-col class="r-text-action" flex="1 1 0">
                Track
              </a-col>
            </a-row>
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
    theme: { type: String, required: false, default: 'tertiary' },
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
    return {
      accents: {
        primary: 'secondary',
        secondary: 'tertiary',
        tertiary: 'primary',
        dark: 'dark'
      }
    }
  },
  created () {
  },
  computed: {
    store () {
      return this.product.store
    }
  },
  methods: {
    getBgClass () {
      let theme = 'dark'
      if (this.isDrop) {
        theme = this.theme + '-light'
      }
      return `r-bg-${theme}`
    },
    getTextClass () {
      return `r-text-${this.theme}`
    },
    getBtnClass () {
      return `r-btn-${this.accents[this.theme]}`
    }
  }
}
</script>
