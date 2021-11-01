<template>
  <div class="r-bg-dark r-text-left">
    <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-seller-meta">
          <div class="r-seller-avatar">
            <a-card class="r-bg-dark r-p-0 r-border-circle">
              <div class="r-ph-12 r-pv-6">
                <a-row :gutter="[6,6]" align="middle" justify="start" type="flex">
                  <a-col flex="18px">
                    <r-avatar :size="18"
                              :data-src="product.store.photo_url"
                              class="r-radius-circle"
                              shape="square"
                              src-placeholder="/assets/icon_default.png"
                    />
                  </a-col>
                  <a-col flex="1 1 0">
                    <p class="r-text-store r-text-white">
                      {{ product.store.name }}
                    </p>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </div>
          <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
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
                      <div class="r-text-xs r-text-light">
                        Previous
                      </div>
                    </a-col>
                    <a-col class="r-text-right" :lg="{ span: 15 }" :md="{ span: 15}"
                           :sm="{ span: 15 }"
                           :xs="{ span: 15 }"
                    >
                      <div class="r-text-xs r-text-light">
                      ~
                      </div>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-product-footer',
  props: {
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
