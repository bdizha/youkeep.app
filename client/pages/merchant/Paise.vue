<template>
  <r-page>
    <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Paise for Merchants
              </h4>
              <h1 class="r-heading">
                <span class="r-text-secondary">Sell more,</span><br>
                <span>Pay less</span>
              </h1>
              <p class="r-text-normal">
                Paise lets your customers pay for products in 3 installments with existing credit at zero interest.
              </p>
              <p class="r-text-normal">
                Unlike other buy-now-pay-later plans, Shopple lets shoppers use their existing credit card for
                the easiest most intuitive checkout.
              </p>
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button class="r-btn-secondary"
                            block
                            type="secondary"
                            size='large'>
                    Sign up
                  </a-button>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button class="r-btn-bordered-purple"
                            block
                            type="secondary"
                            size='large'>
                    Shop directory
                  </a-button>
                </a-col>
              </a-row>
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
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Zero interest payments
              </h2>
              <p class="r-text-normal">
                50% of shoppers are more likely to make a purchase if offered the ability to pay in
                interest-free installment payments.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Higher conversion rate
              </h2>
              <p class="r-text-normal">
                Because shoppers pay over time using their existing credit, they don’t need to fill out an
                application or endure a credit check that frustrates them at checkout—leading to higher checkout
                conversions.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Higher average order rate
              </h2>
              <p class="r-text-normal">
                Shopple is the only buy-now-pay-later plan that lets shoppers set up payment plans with their
                existing credit card without interest charges or fees. This keeps their payments small so they
                get to keep more of their money to spend the way they want—up to +20% higher AOV.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                More qualified customers
              </h2>
              <p class="r-text-normal">
                Unlike other buy-now-pay-later plans, Shopple isn’t new financing. Shopple lets online shoppers
                set up monthly payments at checkout with their existing credit so they don’t need to carry new
                debt. It’s a more responsible way to shop.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Highest approval rating
              </h2>
              <p class="r-text-normal">With hundreds of
                thousands
                of
                customers
                and a monthly expansion to new cities, Shopple was named the fastest growing retail platform
                company in
                South Africa in 2020.
                Shopple thinks it can be done differently: faster, easier and cheaper. The idea is
                simple. We
                arrange
                the shopping, so that you have more time for fun things.</p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  name: 'r-merchant-paise',
  props: {},
  data() {
    return {
      images: [
        'paise-01.jpg',
        'paise-02.jpg',
        'paise-03.jpg',
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
