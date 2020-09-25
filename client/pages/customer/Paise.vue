<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Paise for Customers
              </h4>
              <h1 class="r-heading r-text-uppercase">
                <span class="r-text-primary">Shop more,</span><br>
                <span class="r-text-purple">Pay less.</span>
              </h1>
              <h4 class="r-heading-light">
                We're a better way to shopping. Pay in 3 installments with zero interest
                when you pay on time.
              </h4>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <div class="r-page-header-photo">
          <div class="r-page-primary"
               style="background-image: url('/images/welcome-02.jpg')">
          </div>
        </div>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[48,48]" type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h2 class="r-heading">
                    How it Works
                  </h2>
                  <p class="r-text-normal">
                    Unlike other buy-now-pay-later plans, Shopple lets shoppers use their existing credit card for
                    the easiest most intuitive checkout.
                  </p>
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
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h2 class="r-heading">
                    Increase Conversion
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
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h2 class="r-heading">
                    No Applications. Higher conversion
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
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h2 class="r-heading">
                    No Interest. Up to +20% higher average order value
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
            <a-card hoverable>
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
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
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
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  name: 'r-customer-paise',
  props: {},
  data() {
    return {
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
