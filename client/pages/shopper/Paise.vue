<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Paise for Shoppers
              </h4>
              <h1 class="r-heading">
                <span class="r-text-primary">Shop more,</span><br>
                <span>Earn more</span>
              </h1>
              <h4 class="r-heading-light">
                All your earnings are automatically added into your Paise wallet. You're able to transfer any amount in
                your account to any bank account instantly, some inter-transfer charges may apply.
              </h4>
              <p class="r-text-normal">
                Unlike other buy-now-pay-later plans, Shopple lets shoppers use their existing credit card for
                the easiest most intuitive checkout.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="justify">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35"
                                 xmlns="http://www.w3.org/2000/svg">
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#0069cd" class="Icon__blendBackground"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#0069cd" class="Icon__blendBackground"></path>
                              <path
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F50A2B" class="Icon__blendForeground"></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F50A2B" class="Icon__blendForeground"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading r-text-primary">
                            Zero interest payments
                          </h4>
                          <p class="r-text-normal">
                            50% of shoppers are more likely to make a purchase if offered the ability to pay in
                            interest-free installment payments. Enroll more customers and offer them rewards for buying
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
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35"
                                 xmlns="http://www.w3.org/2000/svg">
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#0069cd" class="Icon__blendBackground"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#0069cd" class="Icon__blendBackground"></path>
                              <path
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F50A2B" class="Icon__blendForeground"></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F50A2B" class="Icon__blendForeground"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading r-text-primary">
                            Higher conversion rate
                          </h4>
                          <p class="r-text-normal">
                            Because shoppers pay over time using their existing credit, they don’t need to fill out an
                            application or endure a credit check that frustrates them at checkout—leading to higher
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
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35"
                                 xmlns="http://www.w3.org/2000/svg">
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#0069cd" class="Icon__blendBackground"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#0069cd" class="Icon__blendBackground"></path>
                              <path
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F50A2B" class="Icon__blendForeground"></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F50A2B" class="Icon__blendForeground"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading r-text-primary">
                            Higher average order rate
                          </h4>
                          <p class="r-text-normal">
                            Shopple is the only buy-now-pay-later plan that lets shoppers set up payment plans with
                            their
                            existing credit card without interest charges or fees. This keeps their payments small so
                            they
                            get to keep more of their money to spend the way they want—up to +20% higher AOV.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35"
                                 xmlns="http://www.w3.org/2000/svg">
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#0069cd" class="Icon__blendBackground"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#0069cd" class="Icon__blendBackground"></path>
                              <path
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F50A2B" class="Icon__blendForeground"></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F50A2B" class="Icon__blendForeground"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading r-text-primary">
                            More qualified customers
                          </h4>
                          <p class="r-text-normal">
                            Unlike other buy-now-pay-later plans, Shopple isn’t new financing. Shopple lets online
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
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35"
                                 xmlns="http://www.w3.org/2000/svg">
                              <defs>
                                <clipPath id="MarketIconClipPath">
                                  <path
                                    d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                    fill="#0069cd" class="Icon__blendBackground"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M24 34V23a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11a1 1 0 0 1-1 1H8a3 3 0 0 1-3-3V11a6 6 0 0 1 6-6h18a6 6 0 0 1 6 6v21a3 3 0 0 1-3 3h-7a1 1 0 0 1-1-1z"
                                fill="#0069cd" class="Icon__blendBackground"></path>
                              <path
                                d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                fill="#F50A2B" class="Icon__blendForeground"></path>
                              <g clip-path="url(#MarketIconClipPath)">
                                <path
                                  d="M30 0a4 4 0 0 1 3.2 1.6L39 9.35A4 4 0 1 1 32.13 13h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26a4 4 0 0 1-7.74 0h-.26A4 4 0 1 1 1 9.35l5.93-7.78A4 4 0 0 1 10.11 0H30z"
                                  fill="#F50A2B" class="Icon__blendForeground"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading r-text-primary">
                            Highest approval rating
                          </h4>
                          <p class="r-text-normal">With hundreds of
                            thousands
                            of
                            customers
                            and a monthly expansion to new cities, Shopple was named the fastest growing retail platform
                            company in
                            South Africa in 2020.
                            Shopple thinks it can be done differently: faster, easier and cheaper. The idea is
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
  data() {
    return {
      images: [
        'art-01.png',
        'art-02.png',
        'art-03.png',
      ],
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted() {
    this.modal = this.$store.state.modal;
  },
  methods: {},
};
</script>
