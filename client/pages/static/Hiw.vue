<template>
  <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           style="background: #FFFFFF;"
    >
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
            <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                    Meet our
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h1 class="r-heading">
                    Powerful marketplace to experience shopping better.
                  </h1>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Get the benefits of Spazamall products at a price you can afford and enjoy from the widest product
                    catalog on the market.
                  </p>
                  <p class="r-text-normal">
                    With online shopping platform, tens of thousands of product categories, and millions of products in
                    front of you, it’s the all-in-one
                    marketplace you deserve.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-button block
                            class="r-btn-primary"
                            size="large"
                            to="/register"
                            type="primary"
                            @click="onModal"
                  >
                    Get started today!
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col
          :lg="{ span: 12 }"
          :md="{ span: 12 }" :sm="{ span: 24 }"
          :xs="{ span: 24 }"
          style="background: url(/client/static/images/content/hero-02.png) no-repeat; background-size: cover; padding-bottom: 600px;"
        >
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <div class="r-ph-24 r-mt-48">
        <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-center"
          >
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     class="r-text-center"
              >
                <r-avatar :dataSrc="`/images/icon_pattern_dark.svg`" :size="75"></r-avatar>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     class="r-text-center"
              >
                <h2 class="r-heading">
                  How our Shopping Service Works
                </h2>
              </a-col>
              <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     class="r-text-center"
              >
                <p class="r-text-normal">
                  Real humans. Better shopping. Our shoppers handle all your shopping and delivery experience for you at
                  a very low cost. We partner shoppers and the nearest stores to provide our customers with fast
                  deliveries and better services.
                </p>
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-center"
          >
            <a-tabs type="card">
              <a-tab-pane key="1" tab="For Customers"
              >
                <r-customer-hiw></r-customer-hiw>
              </a-tab-pane>
              <a-tab-pane key="2" tab="For Merchants"
              >
                <r-merchant-hiw></r-merchant-hiw>
              </a-tab-pane>
              <a-tab-pane key="3" tab="For Shoppers"
              >
                <r-shopper-hiw></r-shopper-hiw>
              </a-tab-pane>
            </a-tabs>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-hiw',
  props: {},
  data () {
    return {}
  },
  created () {
    this.$store.dispatch('base/onDownload', false)
  },
  methods: {
    onStoreTray () {
      this.$store.dispatch('app/onStoreTray', true)
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
