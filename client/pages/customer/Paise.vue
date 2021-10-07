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
                Spazastop For Retailers
              </h4>
              <h1 class="r-heading">
                <span class="r-text-secondary">Shop More,</span><br>
                <span>Pay Less</span>
              </h1>
              <h3 class="r-heading-light">
                Spazastop is a better way to make or receive payments.
              </h3>
              <p class="r-text-normal">
                Unlike other buy-now-pay-later plans, Spazastop lets shoppers use their existing credit card for
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
                      Spazastop is a better way to do payments.
                    </h3>
                    <p class="r-text-normal">
                      Pay in 3 installments with zero interest
                      when you pay on time.
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
                            <svg class="Icon " height="66" viewBox="0 0 40 33" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="cardsIconClipPath">
                                  <path class="Icon__blendBackground"
                                        d="M32 16.87c0 .35 0 .66-.02.93l-.01.2a4.34 4.34 0 0 1-.5 1.95 3.63 3.63 0 0 1-1.52 1.52c-.65.34-1.3.53-3.08.53H5.13c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C.2 19.3 0 18.65 0 16.87V5.13C0 3.34.19 2.7.53 2.05.88 1.39 1.4.88 2.05.53 2.7.2 3.35 0 5.13 0h21.74c1.79 0 2.43.19 3.08.53.66.35 1.17.86 1.52 1.52.34.65.53 1.3.53 3.08v11.74z"
                                        fill="#1D9CD3"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path class="Icon__blendBackground"
                                    d="M32 16.87c0 .35 0 .66-.02.93l-.01.2a4.34 4.34 0 0 1-.5 1.95 3.63 3.63 0 0 1-1.52 1.52c-.65.34-1.3.53-3.08.53H5.13c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C.2 19.3 0 18.65 0 16.87V5.13C0 3.34.19 2.7.53 2.05.88 1.39 1.4.88 2.05.53 2.7.2 3.35 0 5.13 0h21.74c1.79 0 2.43.19 3.08.53.66.35 1.17.86 1.52 1.52.34.65.53 1.3.53 3.08v11.74z"
                                    fill="#1D9CD3"
                              ></path>
                              <path class="Icon__blendForeground"
                                    d="M8 16.13c0-1.79.19-2.43.53-3.08.35-.66.86-1.17 1.52-1.52.65-.34 1.3-.53 3.08-.53h21.74c1.79 0 2.43.19 3.08.53.66.35 1.17.86 1.52 1.52.34.65.53 1.3.53 3.08v11.74c0 1.79-.19 2.43-.53 3.08a3.63 3.63 0 0 1-1.52 1.52c-.65.34-1.3.53-3.08.53H13.13c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C8.2 30.3 8 29.65 8 27.87V16.13zM36.49 28H33.5c-.18 0-.24.02-.3.05a.36.36 0 0 0-.16.15.46.46 0 0 0-.05.22v1.07c0 .18.02.24.05.3.04.07.09.12.15.16.06.02.1.04.22.05H36.49c.18 0 .24-.02.3-.05a.36.36 0 0 0 .16-.15c.02-.06.04-.1.05-.22v-1.07c0-.18-.02-.24-.05-.3a.36.36 0 0 0-.15-.16c-.07-.03-.13-.05-.31-.05zm-5 0H28.5c-.18 0-.24.02-.3.05a.36.36 0 0 0-.16.15.46.46 0 0 0-.05.22v1.07c0 .18.02.24.05.3.04.07.09.12.15.16.06.02.1.04.22.05H31.49c.18 0 .24-.02.3-.05a.36.36 0 0 0 .16-.15c.02-.06.04-.1.05-.22v-1.07c0-.18-.02-.24-.05-.3a.36.36 0 0 0-.15-.16c-.07-.03-.13-.05-.31-.05zm-19.6-13c-.3 0-.42.03-.53.1a.64.64 0 0 0-.27.26c-.05.1-.08.2-.09.42V17.1c0 .31.03.43.1.54.05.12.14.2.26.27.1.05.2.08.42.09H36.1c.31 0 .43-.03.54-.1.12-.05.2-.14.27-.26.05-.1.08-.2.09-.42V15.9c0-.31-.03-.43-.1-.54a.64.64 0 0 0-.26-.27c-.11-.06-.23-.09-.54-.09H11.9z"
                                    fill="#F56F45"
                              ></path>
                              <g clip-path="url(#cardsIconClipPath)">
                                <path class="Icon__blendForeground"
                                      d="M8 16.13c0-1.79.19-2.43.53-3.08.35-.66.86-1.17 1.52-1.52.65-.34 1.3-.53 3.08-.53h21.74c1.79 0 2.43.19 3.08.53.66.35 1.17.86 1.52 1.52.34.65.53 1.3.53 3.08v11.74c0 1.79-.19 2.43-.53 3.08a3.63 3.63 0 0 1-1.52 1.52c-.65.34-1.3.53-3.08.53H13.13c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C8.2 30.3 8 29.65 8 27.87V16.13zM36.49 28H33.5c-.18 0-.24.02-.3.05a.36.36 0 0 0-.16.15.46.46 0 0 0-.05.22v1.07c0 .18.02.24.05.3.04.07.09.12.15.16.06.02.1.04.22.05H36.49c.18 0 .24-.02.3-.05a.36.36 0 0 0 .16-.15c.02-.06.04-.1.05-.22v-1.07c0-.18-.02-.24-.05-.3a.36.36 0 0 0-.15-.16c-.07-.03-.13-.05-.31-.05zm-5 0H28.5c-.18 0-.24.02-.3.05a.36.36 0 0 0-.16.15.46.46 0 0 0-.05.22v1.07c0 .18.02.24.05.3.04.07.09.12.15.16.06.02.1.04.22.05H31.49c.18 0 .24-.02.3-.05a.36.36 0 0 0 .16-.15c.02-.06.04-.1.05-.22v-1.07c0-.18-.02-.24-.05-.3a.36.36 0 0 0-.15-.16c-.07-.03-.13-.05-.31-.05zm-19.6-13c-.3 0-.42.03-.53.1a.64.64 0 0 0-.27.26c-.05.1-.08.2-.09.42V17.1c0 .31.03.43.1.54.05.12.14.2.26.27.1.05.2.08.42.09H36.1c.31 0 .43-.03.54-.1.12-.05.2-.14.27-.26.05-.1.08-.2.09-.42V15.9c0-.31-.03-.43-.1-.54a.64.64 0 0 0-.26-.27c-.11-.06-.23-.09-.54-.09H11.9z"
                                      fill="#FFFFFF"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading  r-text-secondary">
                            Zero interest payments
                          </h4>
                          <p class="r-text-normal">
                            Spazastop offers you the the ability to pay in
                            interest-free installment payments. Enroll today and earn rewards for buying
                            from
                            your favourite shops.
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
                            <svg height="80" viewBox="0 0 26 26" width="80" xmlns="http://www.w3.org/2000/svg">
                              <g fill="none">
                                <path
                                  d="M26,13.2653061 C25.9922911,19.825289 21.0025063,25.306117 14.472037,25.9277324 C7.94156778,26.5493479 2.0073539,22.1083419 0.7621477,15.6676202 C-0.483058496,9.22689845 3.36820693,2.89403311 9.6597749,1.03672133 C15.9513429,-0.82059046 22.6244483,2.40541214 25.0767347,8.48979592 L25.957551,12.2040816 C26,12.5542857 26,12.9097959 26,13.2653061 Z"
                                  fill="#1D9CD3"
                                ></path>
                                <path
                                  d="M20.8371429,4.7755102 L11.1428571,4.7755102 C9.97066094,4.7755102 9.02040816,5.72576298 9.02040816,6.89795918 L9.02040816,8.48979592 L2.96612245,8.48979592 C2.75127149,8.48782622 2.55643943,8.6156193 2.47265306,8.81346939 C2.10621554,9.7113856 1.84966085,10.6503045 1.70857143,11.6097959 C1.69026849,11.7611848 1.7379825,11.9131304 1.83954408,12.0268794 C1.94110565,12.1406283 2.08669641,12.205184 2.23918367,12.2040816 L9.02040816,12.2040816 L9.02040816,19.6326531 C9.02040816,20.8048493 9.97066094,21.755102 11.1428571,21.755102 L20.8371429,21.755102 C21.1173831,21.7553257 21.3863356,21.6446927 21.5853061,21.4473469 C26.0484529,16.9056135 26.0484529,9.62499871 21.5853061,5.08326531 C21.3863356,4.88591952 21.1173831,4.77528657 20.8371429,4.7755102 Z"
                                  fill="#F56F45"
                                ></path>
                                <path
                                  d="M25.0714286,8.48979592 L9.02040816,8.48979592 L9.02040816,12.2040816 L25.9522449,12.2040816 C25.8497684,10.9283132 25.5527271,9.67572938 25.0714286,8.48979592 L25.0714286,8.48979592 Z"
                                  fill="#FFFFFF"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading  r-text-secondary">
                            Use your existing credit
                          </h4>
                          <p class="r-text-normal">
                            Because you pay over time using your existing credit, you don’t need to fill out an
                            application or endure a credit check that frustrates you at checkout.
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
                            <svg class="Icon " height="76" viewBox="0 0 35 38" width="70"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="DocumentWithCheckmarkIconClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M22 4a4 4 0 014 4v26a4 4 0 01-4 4H4a4 4 0 01-4-4V8a4 4 0 014-4h18zm0 28H4v2h18v-2zm0-5h-4v2h4v-2zm-6 0H4v2h12v-2zm6-5H4v2h18v-2zm-6-5H4v2h12v-2zm-4-9H4v2h8V8z"
                                    style="fill: #1D9CD3;"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path
                                class="Icon__blendBackground"
                                d="M22 4a4 4 0 014 4v26a4 4 0 01-4 4H4a4 4 0 01-4-4V8a4 4 0 014-4h18zm0 28H4v2h18v-2zm0-5h-4v2h4v-2zm-6 0H4v2h12v-2zm6-5H4v2h18v-2zm-6-5H4v2h12v-2zm-4-9H4v2h8V8z"
                                style="fill: #1D9CD3;"
                              ></path>
                              <path
                                class="Icon__blendForeground"
                                d="M26 0a9 9 0 110 18 9 9 0 010-18zm3.94 4.73L24 10.78 22.43 9a.83.83 0 00-1.3 1L23 13.2a1 1 0 001.7 0c.3-.41 6-7.57 6-7.57.75-.8-.16-1.51-.76-.9z"
                                style="fill: #F56F45;"
                              ></path>
                              <g clip-path="url(#DocumentWithCheckmarkIconClipPath)">
                                <path
                                  class="Icon__blendForeground"
                                  d="M26 0a9 9 0 110 18 9 9 0 010-18zm3.94 4.73L24 10.78 22.43 9a.83.83 0 00-1.3 1L23 13.2a1 1 0 001.7 0c.3-.41 6-7.57 6-7.57.75-.8-.16-1.51-.76-.9z"
                                  style="fill: #FFFFFF;"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading  r-text-secondary">
                            No applications or credit checks
                          </h4>
                          <p class="r-text-normal">
                            Since it’s your credit, there are no applications or credit checks to make things
                            complicated. And you continue to earn your points and rewards.
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
                              <g fill="none" fill-rule="evenodd">
                                <circle cx="24" cy="24" fill="#1D9CD3" r="24"></circle>
                                <rect fill="#FFFFFF" fill-rule="nonzero" height="3" rx="1.5" width="23" x="12"
                                      y="30"
                                ></rect>
                                <rect fill="#F56F45" fill-rule="nonzero" height="3" rx="1.5" width="23" x="13"
                                      y="17"
                                ></rect>
                                <circle cx="15.5" cy="31.5" fill="#F56F45" fill-rule="nonzero" r="4.5"></circle>
                                <circle cx="32.5" cy="18.5" fill="#F56F45" fill-rule="nonzero" r="4.5"></circle>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading  r-text-secondary">
                            Choose Spazastop at checkout
                          </h4>
                          <p class="r-text-normal">
                            Unlike other buy-now-pay-later plans, Spazastop isn’t new financing. Spazastop lets you
                            set up monthly payments at checkout with your existing credit so you don’t need to carry
                            new
                            debt.
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
                            <svg class="Icon " height="80" viewBox="0 0 40 40" width="80"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                              <defs>
                                <clipPath id="MoneyWithChartClipPath">
                                  <path
                                    class="Icon__blendBackground"
                                    d="M32 11v7a4 4 0 0 1-4 4h-6v-2.1a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27.9.9 0 0 0-.09.42V22H8v-7a4 4 0 0 1 3-3.87V11a5 5 0 0 0 10 0z"
                                    style="fill: #1D9CD3;"
                                  ></path>
                                </clipPath>
                              </defs>
                              <path class="Icon__blendForeground"
                                    d="M36 11a4 4 0 0 1 4 4v21a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V15a4 4 0 0 1 4-4zm-7.9 18h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27 1 1 0 0 0-.09.54v5.2a1 1 0 0 0 .09.54.59.59 0 0 0 .27.27 1 1 0 0 0 .54.09h1.2a1 1 0 0 0 .54-.09.59.59 0 0 0 .27-.27 1 1 0 0 0 .09-.54v-5.2a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09zm7-3h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27 1 1 0 0 0-.09.54v8.2a1 1 0 0 0 .09.54.59.59 0 0 0 .27.27 1 1 0 0 0 .54.09h1.2a1 1 0 0 0 .54-.09.59.59 0 0 0 .27-.27 1 1 0 0 0 .09-.54v-8.2a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09zm-21 0h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27 1 1 0 0 0-.09.54v8.2a1 1 0 0 0 .09.54.59.59 0 0 0 .27.27 1 1 0 0 0 .54.09h1.2a1 1 0 0 0 .54-.09.59.59 0 0 0 .27-.27 1 1 0 0 0 .09-.54v-8.2a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09zm7-7h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27 1 1 0 0 0-.09.54v15.2a1 1 0 0 0 .09.54.59.59 0 0 0 .27.27 1 1 0 0 0 .54.09h1.2a1 1 0 0 0 .54-.09.59.59 0 0 0 .27-.27 1 1 0 0 0 .09-.54V19.9a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09z"
                                    style="fill: #F56F45;"
                              ></path>
                              <path class="Icon__blendBackground"
                                    d="M28 0a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4zM16 6a5 5 0 1 0 5 5 5 5 0 0 0-5-5z"
                                    style="fill: #1D9CD3;"
                              ></path>
                              <path class="Icon__blendForeground"
                                    d="M32 11v7a4 4 0 0 1-4 4h-6v-2.1a1 1 0 0 0-.09-.54.59.59 0 0 0-.27-.27 1 1 0 0 0-.54-.09h-1.2a1 1 0 0 0-.54.09.59.59 0 0 0-.27.27.9.9 0 0 0-.09.42V22H8v-7a4 4 0 0 1 3-3.87V11a5 5 0 0 0 10 0z"
                                    style="fill: #FFFFFF;"
                              ></path>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 14 }" :md="{ span: 14 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                               style="text-align: left;"
                        >
                          <h4 class="r-heading  r-text-secondary">
                            Shop with Spazastop.
                          </h4>
                          <p class="r-text-normal">
                            Pay later on your terms.
                            Start business with interest free monthly payments. It’s a more responsible way to shop.</p>
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
  name: 'r-customer-spazastop',
  props: {},
  data () {
    return {
      banner: 'art-07.svg',
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
