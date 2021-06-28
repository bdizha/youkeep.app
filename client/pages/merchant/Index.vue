<template>
  <a-row :gutter="[96,96]" type="flex" justify="center" align="middle">
    <a-col style="background: #FFFFFF;" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-mt-48 r-ph-24">
        <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
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
                      For Merchants
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h1 class="r-heading">
                      Become a <span class="r-text-secondary">verified</span> merchant today!
                    </h1>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Join the Shopple Merchant Program and start promoting Shopple in-store today and watch your
                      sales run wild!
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-button block @click="onModal('merchant')"
                              class="r-btn-secondary r-margin-top-24"
                              size="large" type="secondary"
                    >
                      Become a Merchant
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
            <r-avatar class="r-avatar-auto" data-src="/images/content/hero-02.png" :size="450"
            ></r-avatar>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <r-merchant-steps></r-merchant-steps>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >

      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-block" data-src="/images/content/hero-02.png" :size="450"></r-avatar>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 16 }"
                   :lg="{ span: 16 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" type="flex" justify="center">
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          Launch Shopple Online
                        </h4>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h2 class="r-heading">
                          <span class="r-heading r-text-secondary">Partner</span> with us today!
                        </h2>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          Increase online and in-store sales with Shop now, Pay in bits at checkout.
                        </p>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          Join the Shopple Merchant Program and start promoting Shopple online and in-store today and
                          watch your
                          sales run wild!
                        </p>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }"
                      >
                        <a-button block @click="onModal('merchant')"
                                  class="r-btn-secondary r-margin-top-24"
                                  size="default"
                                  type="secondary"
                        >
                          Become a merchant
                        </a-button>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }"
                      >
                        <nuxt-link to="/merchant/help">
                          <a-button class="r-btn-bordered-grey"
                                    block
                                    type="secondary"
                                    size="default"
                          >
                            Merchant Help
                          </a-button>
                        </nuxt-link>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 16 }"
                   :lg="{ span: 16 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" type="flex" justify="center">
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          Get more buying shoppers
                        </h4>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h2 class="r-heading">
                          Let more customers
                          pay simple.
                        </h2>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          Shopple shoppers use their existing credit card to pay over time, which keeps their payments
                          small so they keep more of their money for living.
                        </p>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          If you accept Visa, you’re already capable of accepting Shopple. Absolutely zero integration
                          required.
                        </p>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-block" data-src="/images/content/32.png" :size="450"></r-avatar>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-block" data-src="/images/content/hero-01.png" :size="450"></r-avatar>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 16 }"
                   :lg="{ span: 16 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" type="flex" justify="center">
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          <span class="r-text-secondary">Increase</span> sales conversion
                        </h4>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <h2 class="r-heading">
                          <span class="rcicon-file-text">Earn</span> more value from returning customers.
                        </h2>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          42% of shoppers are more likely to make a purchase if offered the ability to pay in
                          interest-free "Delayed Payments".
                        </p>
                      </a-col>
                      <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{span: 24}"
                      >
                        <p class="r-text-normal">
                          By offering Shopple In-Store, your customers can quickly make instant payments at the
                          register.
                        </p>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }"
                      >
                        <a-button block @click="onModal('merchant')"
                                  class="r-btn-secondary r-margin-top-24"
                                  size="default"
                                  type="secondary"
                        >
                          Become a merchant
                        </a-button>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
                             :md="{ span: 12 }"
                             :lg="{ span: 12 }"
                      >
                        <nuxt-link to="/merchant/help">
                          <a-button class="r-btn-bordered-grey"
                                    block
                                    type="secondary"
                                    size="default"
                          >
                            Merchant Help
                          </a-button>
                        </nuxt-link>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <r-merchant-metrics></r-merchant-metrics>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <h2 class="r-heading">
            Think you know shopping <span class="r-text-primary">experience</span>?
          </h2>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-48">
                  <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="center">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Want to start making more sells with Shopple?
                      </h4>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <p class="r-text-normal">
                        Apply to be a Shopple Merchant today and start achieving your goals.
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-button @click="onModal" class="r-btn-secondary"
                                size="large"
                                type="secondary"
                      >
                        Become a Merchant
                      </a-button>
                    </a-col>
                  </a-row>
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-merchant',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onModal (current) {
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
