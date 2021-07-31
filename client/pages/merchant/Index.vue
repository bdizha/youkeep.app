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
                        <h3 class="r-heading-light r-text-primary r-text-uppercase r-text-primary">
                          For Merchants
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          Become a <span class="r-text-white">verified</span> merchant today!
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium r-text-white">
                          Join the Spazamall Merchant Program and start promoting Spazamall online today and watch
                          your
                          sales run wild!
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button block
                                  class="r-btn-primary"
                                  size="large"
                                  type="secondary" @click="onRegister('seller')"
                        >
                          Become a Merchant
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-merchant-steps></r-merchant-steps>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-merchant-metrics></r-merchant-metrics>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/features/feature-01.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" justify="center" type="flex">
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          Launch Spazamall Online
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading">
                          <span class="r-text-secondary">Partner</span> with us and <span class="r-text-primary"
                        >grow</span> your business today!
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-normal">
                          Increase online and in-store sales with Shop now, Pay in bits at checkout.
                        </p>
                        <p class="r-text-normal">
                          Join the Spazamall Merchant Program and start promoting Spazamall online and in-store
                          today and
                          watch your
                          sales run wild!
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button block class="r-btn-secondary r-margin-top-24"
                                  size="large"
                                  type="secondary"
                                  @click="onRegister('seller')"
                        >
                          Get started today!
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/features/feature-02.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" justify="center" type="flex">
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          Get more buying shoppers
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading">
                          <span class="r-text-secondary">Let</span> more customers <span class="r-text-primary"
                        >discover</span> your products.
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-normal">
                          Spazamall shoppers use their existing credit card to pay over time at no cost.
                        </p>
                        <p class="r-text-normal">
                          If you want to boost your marketing channels for your online business, we're here to help.
                          Absolutely zero
                          integration
                          required.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <nuxt-link to="/merchant/help">
                          <a-button block
                                    class="r-btn-primary"
                                    size="large"
                                    type="secondary"
                          >
                            Merchant Help
                          </a-button>
                        </nuxt-link>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/features/feature-04.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" justify="center" type="flex">
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                          <span class="r-text-secondary">Increase</span> sales conversion
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading">
                          <span class="r-text-secondary">Earn</span> more <span class="r-text-primary">value</span> from
                          returning customers.
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-normal">
                          42% of shoppers are more likely to make a purchase if offered the freedom of choice.
                        </p>
                        <p class="r-text-normal">
                          Our widest customer base is waiting to buy your products on Spazamall. We partner up with
                          growing businesses like yours.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button block class="r-btn-secondary"
                                  size="large"
                                  type="secondary"
                                  @click="onRegister('seller')"
                        >
                          Become a merchant
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <r-merchant-benefits></r-merchant-benefits>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <div class="r-mv-48">
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                        Want to start making more sells with Spazamall?
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading">
                        Think you know <span class="r-text-white">shopping</span> experience?
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-medium r-text-secondary">
                        Apply to be a Spazamall Merchant today and start achieving your goals.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-secondary" size="large"
                                type="secondary"
                                @click="onRegister"
                      >
                        Become a Merchant
                      </a-button>
                    </a-col>
                  </a-row>
                </div>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
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
    onRegister (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onRegister', modal)
    }
  },
}
</script>
