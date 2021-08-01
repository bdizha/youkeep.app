<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
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
                    <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                      For Merchants
                    </h3>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h1 class="r-heading">
                      <span class="r-text-primary">Enable</span> a better shopping <span class="r-text-secondary">experience</span> to your customers
                    </h1>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
                      Get the benefits of Spazamall products at a price you can afford and enjoy from the widest product
                      catalog on the market.
                    </p>
                    <p class="r-text-normal">
                      With online shopping platform, tens of thousands of product categories, and millions of products
                      in
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
                              @click="onRegister"
                    >
                      Get started today!
                    </a-button>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
              <a-col
                :lg="{ span: 12 }" :md="{ span: 12 }"
                :sm="{ span: 24 }"
                :xs="{ span: 24 }"
              >
                <r-avatar :size="450" class="r-avatar-block" data-src="/images/content/screen-02-primary.png"
                ></r-avatar>
              </a-col>
        </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-tabs active-key="merchant" theme="merchant"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-merchant-hiw ></r-merchant-hiw>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-card class="r-bg-secondary">
      <div class="r-mv-48">
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
                 class="r-text-center"
          >
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading-light r-text-primary r-text-uppercase">
              <span class="r-text-white">Sell</span> online at Spazamall?
            </h3>
          </a-col>
          <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h2 class="r-heading">
              Spazamall <span class="r-text-primary">makes</span> your products visible to millions of customers.
            </h2>
          </a-col>
          <a-col :lg="{ span: 18 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-medium">
              That's because Spazamall is seamlessly integrated into Spazamall checkout and your money shows up
              in your Spazamall account after your sale closes.
            </p>
          </a-col>
          <a-col :lg="{ span: 18 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-normal">Plus, Spazamall offers a host of seller tools
              and resources to enhance your fun and profits.
            </p>
            <a-button class="r-btn-primary"
                      size="large"
                      to="/register"
                      type="primary"
                      @click="onRegister"
            >
              Get Started Today!
            </a-button>
          </a-col>
        </a-row>
          </a-col>
        </a-row>
      </div>
      </a-card>
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
    onRegister () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onRegister', modal)
    }
  },
}
</script>
