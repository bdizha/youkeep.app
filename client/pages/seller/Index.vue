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
                        <h3 class="r-heading-light r-text-uppercase">
                          Seller <span class="r-text-primary">Central</span>
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          Become a <span class="r-text-primary">verified</span> seller today!
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          <span class="r-text-primary">
                          Join the Spazamall Seller Platform and start promoting Spazamall online today and watch
                          your
                          sales run wild.
                          </span>
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">Built for retail shops, it offers a clear view into
                          product
                          purchase activity with automated billing, expensing, and reporting.
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
                          Become a Seller
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
    >
      <r-seller-steps></r-seller-steps>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-metrics></r-seller-metrics>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
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
                        <h4 class="r-heading r-text-uppercase r-text-secondary">
                          Launch Spazamall Online
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading-light">
                          <span class="r-text-secondary">Partner</span> with us and <span class="r-text-secondary"
                        >grow</span> your business today!
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-medium">
                          <span class="r-text-secondary">36%</span> increase in online and in-store sales with Spazamall+ and more payment options.
                        </p>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-normal">
                          Join the Spazamall Seller Program and start promoting Spazamall online and in-store
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
          <a-card class="r-bg-secondary-light">
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
                        <h4 class="r-heading r-text-uppercase r-text-secondary">
                          Get more buying shoppers
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading-light">
                          <span class="r-text-secondary">Let</span> more customers <span class="r-text-secondary"
                        >discover</span> your products.
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-medium">
                          <span class="r-text-secondary">24%</span> of Spazamall shoppers use their existing credit card to pay over time at no cost.
                        </p>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
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
                        <nuxt-link to="/seller/help">
                          <a-button block
                                    class="r-btn-primary"
                                    size="large"
                                    type="secondary"
                          >
                            Seller Help
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
          <a-card class="r-bg-secondary-light">
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
                        <h4 class="r-heading r-text-uppercase r-text-secondary">
                          <span class="r-text-secondary">Increase</span> sales conversion
                        </h4>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h3 class="r-heading-light">
                          <span class="r-text-secondary">Earn</span> more <span class="r-text-secondary">value</span> from
                          returning customers.
                        </h3>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <p class="r-text-medium">
                          <span class="r-text-secondary">42%</span> of shoppers are more likely to make a purchase if offered the freedom of choice.
                        </p>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                             class="r-text-left"
                      >
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
                          Become a seller
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
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-seller-benefits></r-seller-benefits>
        </a-col>
      </a-row>
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
                      <h3 class="r-heading-light r-text-primary r-text-uppercase">
                        Are you ready to sell more?
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading r-text-white">
                        <span class="r-text-primary">Discover</span> new customers. <span class="r-text-primary"
                      >Start</span> selling today!
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <h4 class="r-heading r-text-primary">
                                <span class="r-checked-item-text">
                                Create an account
                                </span>
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                Choose to be a Spazamall Seller today and start achieving your goals.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <h4 class="r-heading r-text-primary">
                                <span class="r-checked-item-text">
                                 Setup your store
                                </span>
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                Your products are showcased on our platform to relevant customers.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <h4 class="r-heading r-text-primary">
                                <span class="r-checked-item-text">
                                Start accepting orders
                                </span>
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                Seamleassly sell products that meet your customer's unique demands.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
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
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller',
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
  }
}
</script>
