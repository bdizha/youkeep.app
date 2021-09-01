<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-secondary">
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
                        <h3 class="r-heading-light r-text-primary r-text-uppercase">
                          For Suppliers
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          <span class="r-text-primary">Enable</span> more buyers to <span class="r-text-primary">discover</span>
                          Your categories.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Get the benefits of the Addtract platform at a price you can afford and enjoy the best return on investment (ROI) on the market.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          With an online business platform, millions of buyers, and tons of selling tools on Addtract, it’s the all-in-one
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
                <r-avatar :size="450" class="r-avatar-block" data-src="/images/content/screen-02-secondary.png"
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
      <r-tabs active-key="seller" theme="seller"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-seller-hiw></r-seller-hiw>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-card class="r-bg-secondary">
        <div class="r-mv-24">
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
                    Why <span class="r-text-white">Sell</span> online at Addtract?
                  </h3>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Addtract <span class="r-text-primary">makes</span> Your categories visible to millions of buyers.
                  </h2>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    That's because Addtract is seamlessly integrated into your realtime catalog and your money shows up
                    in your Addtract account with every sale.
                  </p>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
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
