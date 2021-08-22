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
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Addtract for Sellers
                  </h4>
                  <h1 class="r-heading">
                    <span class="r-text-secondary">Sell more,</span><br>
                    <span>Pay Less</span>
                  </h1>
                  <p class="r-text-normal">
                    Unlike other buy-now-pay-later plans, Addtract lets shoppers use their existing credit card for
                    the easiest most intuitive checkout.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <a-button block
                            class="r-btn-secondary"
                            size="default"
                            type="secondary"
                  >
                    Sign up
                  </a-button>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <nuxt-link to="/contact-us">
                    <a-button block
                              class="r-btn-bordered-secondary"
                              size="default"
                              type="secondary"
                    >
                      Contact Us
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
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
                      We're a better way to achieve better sales.
                    </h3>
                    <p class="r-text-normal">
                      Addtract lets your customers pay for products in 3 installments with existing credit at zero
                      interest.
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg height="80" viewBox="0 0 48 48" width="80" xmlns="http://www.w3.org/2000/svg">
                              <g fill="none" transform="translate(2 8)">
                                <path
                                  d="M5.5,4.44 C5.61140636,3.65036579 6.03261703,2.93758009 6.67058058,2.45910743 C7.30854412,1.98063478 8.11075737,1.77585253 8.9,1.89 L40.59,6.35 C42.2256812,6.58232758 43.365683,8.09338882 43.14,9.73 L40.49,28.56 C40.2576724,30.1956812 38.7466112,31.335683 37.11,31.11 L5.41,26.65 C3.77431884,26.4176724 2.63431702,24.9066112 2.86,23.27 L5.51,4.44 L5.5,4.44 Z M5.09,7.42 L42.72,12.71 L42.16,16.67 L4.53,11.38 L5.09,7.42 Z"
                                  fill="#F56F45"
                                ></path>
                                <rect fill="#1D9CD3" height="25" rx="3" width="38"></rect>
                                <path
                                  d="M28,18 C28,17.4477153 28.4477153,17 29,17 L33,17 C33.5522847,17 34,17.4477153 34,18 C34,18.5522847 33.5522847,19 33,19 L29,19 C28.4477153,19 28,18.5522847 28,18 Z M20,18 C20,17.4477153 20.4477153,17 21,17 L25,17 C25.5522847,17 26,17.4477153 26,18 C26,18.5522847 25.5522847,19 25,19 L21,19 C20.4477153,19 20,18.5522847 20,18 Z M12,18 C12,17.4477153 12.4477153,17 13,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L13,19 C12.4477153,19 12,18.5522847 12,18 Z M4,18 C4,17.4477153 4.44771525,17 5,17 L9,17 C9.55228475,17 10,17.4477153 10,18 C10,18.5522847 9.55228475,19 9,19 L5,19 C4.44771525,19 4,18.5522847 4,18 Z M4,5 C4,4.44771525 4.44771525,4 5,4 L10,4 C10.5522847,4 11,4.44771525 11,5 L11,10 C11,10.5522847 10.5522847,11 10,11 L5,11 C4.44771525,11 4,10.5522847 4,10 L4,5 Z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-secondary">
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
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                 style="text-align: left;"
          >
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg height="80" viewBox="0 0 48 48" width="80" xmlns="http://www.w3.org/2000/svg">
                              <g fill="none" transform="translate(1 8)">
                                <path
                                  d="M44,32 L13,32 C11.8954305,32 11,31.1045695 11,30 L11,19.2 L33.455,19.2 L33.455,18 L46,18 L46,30 C46,31.1045695 45.1045695,32 44,32 Z M33.455,9 L44,9 C45.1045695,9 46,9.8954305 46,11 L46,13 L33.455,13 L33.455,9 Z"
                                  fill="#1D9CD3"
                                ></path>
                                <path
                                  d="M33,23 L2,23 C0.8954305,23 0,22.1045695 0,21 L0,2 C0,0.8954305 0.8954305,0 2,0 L33,0 C34.1045695,0 35,0.8954305 35,2 L35,21 C35,22.1045695 34.1045695,23 33,23 Z M10,7 C10,6.44771525 9.55228475,6 9,6 L4,6 C3.44771525,6 3,6.44771525 3,7 L3,10 C3,10.5522847 3.44771525,11 4,11 L9,11 C9.55228475,11 10,10.5522847 10,10 L10,7 Z"
                                  fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-secondary">
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg height="66" viewBox="0 0 34 44" width="51" xmlns="http://www.w3.org/2000/svg">
                              <g fill="none" fill-rule="evenodd" transform="translate(.136)">
                                <path
                                  d="M21.0161523,37.1568922 L20,38.5714286 L19.1103395,38.5714286 L20.5416667,36.5789474 L21.0161523,37.1568922 Z M11.5911523,36.9378446 L10.25,38.5714286 L9.69753086,38.5714286 L11.3333333,36.5789474 L11.5911523,36.9378446 Z M5.375,3.28571429 L5.375,1.7593985 C5.375,0.984636922 6.32639491,2.67643051e-16 7,0 L31.375,0 C32.0486051,0 33,0.984636922 33,1.7593985 L33,35.0526316 L30.3012747,37.9745597 C30.1241879,38.1662928 29.910796,38.3163537 29.6763802,38.4180545 L29.75,38.3383459 L29.75,5.04511278 C29.75,4.27035121 28.7986051,3.28571429 28.125,3.28571429 L5.375,3.28571429 Z"
                                  fill="#F56F45"
                                ></path>
                                <path
                                  d="M23.5625,44 L23.5625,44 C23.0481357,44 22.5608222,43.7695729 22.2344396,43.3720241 L18.4166667,38.7218045 L15.0990364,43.3401169 C14.8014434,43.7543817 14.3225754,44 13.8125,44 L13.8125,44 C13.3024246,44 12.8235566,43.7543817 12.5259636,43.3401169 L9.20833333,38.7218045 L5.39056043,43.3720241 C5.06417779,43.7695729 4.57686433,44 4.0625,44 L4.0625,44 C3.54455013,44 3.05015011,43.7836212 2.69872529,43.4031311 L0,40.481203 L0,7.18796992 C0,6.41320835 0.951394907,5.42857143 1.625,5.42857143 L26,5.42857143 C26.6736051,5.42857143 27.625,6.41320835 27.625,7.18796992 L27.625,40.481203 L24.9262747,43.4031311 C24.5748499,43.7836212 24.0804499,44 23.5625,44 Z"
                                  fill="#1D9CD3"
                                ></path>
                                <rect fill="#FFF" height="2" rx="1" width="18" x="5" y="15"></rect>
                                <rect fill="#FFF" height="2" rx="1" width="18" x="5" y="19.04"></rect>
                                <rect fill="#FFF" height="2" rx="1" width="18" x="5" y="23"></rect>
                                <rect fill="#FFF" height="2" rx="1" width="18" x="5" y="27"></rect>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-secondary">
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg height="80" viewBox="0 0 48 48" width="80" xmlns="http://www.w3.org/2000/svg">
                              <g fill="none" transform="translate(7 10)">
                                <path
                                  d="M18,11.6853933 C19.5927778,8.70853319 21.8525329,6.11466646 24.6137366,4.0937958 L21.10523,0.693698095 C20.7120353,0.312652662 20.8330183,0 21.3875236,0 L33.0018904,0 C33.5547579,0.00535811326 34,0.441228178 34,0.97703957 L34,12.2129946 C34,12.7503664 33.6773787,12.8773815 33.2942659,12.5061065 L28.9086326,8.25598437 C25.4404537,10.0928188 22.5066163,14.469956 20.984247,20 C20.3497674,17.1190881 19.3472939,14.3260306 18,11.6853933 L18,11.6853933 Z"
                                  fill="#F56F45"
                                ></path>
                                <path
                                  d="M9.3,4.2 L12.8,0.7 C13.18,0.32 13.06,0 12.5,0 L1,0 C0.44771525,0 0,0.44771525 0,1 L0,12.5 C0,13.05 0.32,13.18 0.7,12.8 L5.05,8.45 C10.09,11.2 14,19.53 14,29 L20,29 C20,18.23 15.53,8.67 9.3,4.2 Z"
                                  fill="#1D9CD3"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-secondary">
                            More qualified customers
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 10 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg height="80" viewBox="0 0 48 48" width="80" xmlns="http://www.w3.org/2000/svg">
                              <g id="Artboard-2" fill="none" fill-rule="evenodd">
                                <path id="2"
                                      d="M40,25.0190324 C38.5175596,23.7597345 36.5975025,23 34.5,23 C29.8055796,23 26,26.8055796 26,31.5 C26,32.0118259 26.0452378,32.513086 26.1319332,33 L4.00002553,33 C1.79087243,33 0,31.2129147 0,28.9944797 L0,16 L40,16 L40,25.0190324 Z M40,12 L0,12 L0,11.0055203 C0,8.7933325 1.79642476,7 4.00002553,7 L35.9999745,7 C38.2091276,7 40,8.78708529 40,11.0055203 L40,12 Z"
                                      fill="#1D9CD3"
                                ></path>
                                <path id="1"
                                      d="M42.7632865,37.9790112 L47.4796816,42.6954063 C48.1722401,43.3879648 48.1756809,44.5073831 47.4765555,45.2065085 C46.7822705,45.9007935 45.652514,45.8966954 44.9654533,45.2096347 L40.1241389,40.3683203 C38.4982997,41.4015568 36.5690368,42 34.5,42 C28.7010101,42 24,37.2989899 24,31.5 C24,25.7010101 28.7010101,21 34.5,21 C40.2989899,21 45,25.7010101 45,31.5 C45,33.9448262 44.1644307,36.1944948 42.7632865,37.9790112 Z M42,31.4676596 C42,27.3076629 38.6276563,23.9353192 34.4676596,23.9353192 C30.3076629,23.9353192 26.9353192,27.3076629 26.9353192,31.4676596 C26.9353192,35.6276563 30.3076629,39 34.4676596,39 C38.6276563,39 42,35.6276563 42,31.4676596 Z"
                                      fill="#F56F45"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading r-text-secondary">
                            Highest approval rating
                          </h4>
                          <p class="r-text-normal">With hundreds of
                            thousands
                            of
                            customers
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
  props: {},
  data () {
    return {
      banner: 'art-03.png',
      modal: {
        current: null,
        message: null
      }
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
