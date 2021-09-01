<template>
  <r-page>
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Addtract Marketplace
              </h4>
              <h1 class="r-heading">
                <span class="r-text-primary">Shop More,</span><br>
                <span>Earn more</span>
              </h1>
              <h4 class="r-heading-light">
                All your earnings are automatically added into your Addtract wallet.
              </h4>
              <p class="r-text-normal">
                Unlike other buy-now-pay-later plans, Addtract lets shoppers use their existing credit card for
                the easiest most intuitive checkout.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-card>
          <div slot="cover">
            <r-avatar :src="'/assets/' + banner" shape="square"/>
          </div>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             style="text-align: left;"
      >
        <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="gutter-row"
                  >
                    <h3 class="r-heading">
                      We're a better way to accept payments.
                    </h3>
                    <p class="r-text-normal">
                      You're able to transfer any amount in
                      your account to any bank account instantly, some inter-transfer charges may apply.
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                         :xs="{ span: 24 }"
                         class="gutter-row"
                  >
                    <nuxt-link to="/career/openings">
                      <a-button
                        block
                        class="r-btn-secondary"
                        size="large"
                        type="secondary"
                      >
                        Get started
                      </a-button>
                    </nuxt-link>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             style="text-align: left;"
      >
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " height="70" viewBox="0 0 40 35" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#1D9CD3"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F56F45"
                              ></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-primary">
                            Zero interest payments
                          </h4>
                          <p class="r-text-normal">
                            50% of shoppers are more likely to make a purchase if offered the ability to pay in
                            interest-free installment payments. Enroll more buyers and offer them rewards for buying
                            from
                            you.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " height="70" viewBox="0 0 40 35" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#1D9CD3"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F56F45"
                              ></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-primary">
                            Higher conversion rate
                          </h4>
                          <p class="r-text-normal">
                            Because shoppers pay over time using their existing credit, they don’t need to fill out an
                            application or endure a credit check that frustrates them at checkout - leading to higher
                            checkout
                            conversions.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " height="70" viewBox="0 0 40 35" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#1D9CD3"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F56F45"
                              ></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-primary">
                            Higher average order rate
                          </h4>
                          <p class="r-text-normal">
                            Addtract is the only buy-now-pay-later plan that lets shoppers set up payment plans with
                            their
                            existing credit card without interest charges or fees. This keeps their payments small so
                            they
                            get to keep more of their money to spend the way they want - up to +20% higher AOV.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " height="70" viewBox="0 0 40 35" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#1D9CD3"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F56F45"
                              ></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-primary">
                            More qualified buyers
                          </h4>
                          <p class="r-text-normal">
                            Unlike other buy-now-pay-later plans, Addtract isn’t new financing. Addtract lets online
                            shoppers
                            set up monthly payments at checkout with their existing credit so they don’t need to carry
                            new
                            debt. It’s a more responsible way to shop.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " height="70" viewBox="0 0 40 35" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#1D9CD3"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F56F45"
                              ></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-primary">
                            Highest approval rating
                          </h4>
                          <p class="r-text-normal">With hundreds of
                            thousands
                            of
                            buyers
                            and a monthly expansion to new cities, Addtract was named the fastest growing retail
                            platform
                            company in
                            South Africa in 2020.
                            Addtract thinks it can be done differently: faster, easier and cheaper. The idea is
                            simple.</p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  name: 'r-shopper-paise',
  props: {},
  data () {
    return {
      banner: 'art-03.png',
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
