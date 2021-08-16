<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
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
                        <h4 class="r-heading-light r-text-primary r-text-uppercase">
                          Get Paid to Shop
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          It’s <span class="r-text-primary">quick</span> & <span class="r-text-primary">easy</span> to earn on your time in your car, anywhere.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Active Graphigem shoppers handle all the business and delivery experiences for Graphigem customers at a steady rate.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          We partner shoppers and the nearest stores to provide our customers with the fastest
                          deliveries on the market.
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
      <r-tabs active-key="shopper" theme="shopper" title="Graphigem connects shoppers to customers."></r-tabs>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-shopper-hiw></r-shopper-hiw>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-24">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h3 class="r-heading-light r-text-uppercase">
                        Why <span class="r-text-primary">Graphigem</span> for shoppers?
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading">
                        Shop and deliver orders <span class="r-text-primary">online</span> quickly and securely.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-medium">
                        Graphigem is a membership-based business marketplace, enabling delivery of trendy fashion items,
                        hot food, household essentials and more.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button block class="r-btn-primary"
                                size="large"
                                type="secondary"
                                @click="onRegister"
                      >
                        Get started today!
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>

export default {
  layout: 'default',
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
