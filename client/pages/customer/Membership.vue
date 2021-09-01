<template>
  <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
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
                        <h3 class="r-heading-light r-text-white r-text-uppercase">
                          Meet Addtract<span class="r-text-primary">+</span>
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          The membership that helps you save more <span class="r-text-primary">time</span> & <span
                          class="r-text-primary"
                        >money.</span>
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-large">
                          Only R165/month or R1,815/year*
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Get the benefits of Addtract+ with every purchase you make
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
                <r-avatar :size="450" class="r-avatar-block" data-src="/shoppers/16_secondary.png"
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
      <r-tabs active-key="customer" theme="customer"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-row :gutter="[48,96]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-ph-24"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Free shipping, no order minimum
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading">
                          Free <span class="r-text-primary">next-day</span> & <span class="r-text-secondary"
                        >two-day</span> shipping on items from Addtract.
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Excludes oversized, freight, & Marketplace items.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p v-for="(feature, index) in features"
                           :key="index" class="r-checked-item"
                        >
                          <a-icon class="r-checked-item-icon" type="check"/>
                          {{ feature.content }}
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button class="r-btn-secondary"
                                  size="large"
                                  to="/register"
                                  type="primary"
                                  @click="onRegister"
                        >
                          Start 15 day free trial
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :dataSrc="'/images/content/screen-02-secondary.png'" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-ph-24"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :dataSrc="'/images/content/screen-01-secondary.png'" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Free delivery from your store
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading">
                          <span class="r-text-secondary">Fashion</span> items & more delivered as soon as <span
                          class="r-text-secondary"
                        >today</span>, at the low prices you love.
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Fashion items. Gadgets. Even last-minute gifts. If you need it, get it today.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p v-for="(item, index) in benefits"
                           :key="index" class="r-checked-item"
                        >
                          <a-icon class="r-checked-item-icon" type="check"/>
                          {{ item.content }}
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button class="r-btn-secondary"
                                  size="large"
                                  to="/register"
                                  type="primary"
                                  @click="onRegister"
                        >
                          Start 15 day free trial
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-card class="r-bg-secondary">
        <div class="r-mv-24">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 16 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading-light r-text-uppercase">
                    Why <span class="r-text-primary">Addtract+</span> For Buyers?
                  </h3>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    <span class="r-text-primary">Become</span> a member today!
                    Give it a try! <span class="r-text-primary">Cancel</span> anytime.
                  </h2>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Enjoy free delivery of everyday must-haves & more, at the everyday low prices you love. Get your items as soon as the same day.
                  </p>
                </a-col>
                <a-col :lg="{ span: 15 }" :md="{ span: 15 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-button class="r-btn-primary"
                            size="large"
                            to="/register"
                            type="primary"
                            @click="onRegister"
                  >
                    Join our waitlist
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
    return {
      features: [
        { content: 'No R450 order minimum required' },
        { content: 'Huge assortment of eligible items' },
        { content: 'Items shipped by Addtract shoppers for free' }
      ],
      benefits: [
        { content: 'Up to 180,000 items available' },
        { content: 'Get your order as fast as same-day' },
        { content: 'Same everyday low prices you love' }
      ]
    }
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
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
