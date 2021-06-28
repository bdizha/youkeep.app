<template>
  <a-row :gutter="[96,96]" type="flex" justify="center" align="middle">
    <a-col style="background: #FFFFFF;" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-mv-48">
        <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }"
          >
            <a-row :gutter="[24,24]" type="flex" justify="end" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }"
                     :lg="{ span: 15 }"
              >
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-primary r-text-uppercase r-text-primary">
                      Meet Shopple
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h1 class="r-heading">
                      Powerful marketplace to experience shopping better.
                    </h1>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Get the benefits of Shopple products and services at a price you can afford and enjoy from the
                      widest product
                      catalog on the market.
                    </p>
                    <p class="r-text-normal">
                      With online shopping platform, tens of thousands of product categories, and millions of products
                      in
                      front of you, it’s the all-in-one
                      marketplace you deserve.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-button class="r-btn-secondary"
                              block
                              type="primary"
                              to="/register"
                              size="large"
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
            :xs="{ span: 24 }" :sm="{ span: 24 }"
            :md="{ span: 12 }"
            :lg="{ span: 12 }"
          >
            <r-avatar class="r-avatar-auto" data-src="/images/content/32.png" :size="450"
            ></r-avatar>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-ph-24 r-mt-48">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="top">
          <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     class="r-text-center"
              >
                <r-avatar :dataSrc="`/images/icon_pattern_dark.svg`" :size="75"></r-avatar>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     class="r-text-center"
              >
                <h2 class="r-heading">
                  How our Shopping Service Works
                </h2>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 18 }"
                     :lg="{ span: 16 }"
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
          <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <r-tabs tab="3"></r-tabs>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>

export default {
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
