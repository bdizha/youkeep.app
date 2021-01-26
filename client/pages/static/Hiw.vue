<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h1 class="r-heading">
                <span class="r-text-secondary">How does Shopple work?</span>
              </h1>
              <p class="r-text-normal">
                It doesn’t matter when or where you shop, as long as
                you do it with Shopple, you are fully in control.
              </p>
              <p class="r-text-normal">
                In our mobile app you can do all the shopping you need within a few
                minutes. However, shopping online can
                take
                some getting used to. That is why we are happy to explain how it works.
              </p><br/>
              <a-row :gutter="[24, 24]" type="flex" justify="start" align="middle">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onModal('register')" class="r-btn-secondary"
                            block
                            type="secondary"
                            size='default'>
                    Join now
                  </a-button>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onStoreTray" class="r-btn-bordered-grey"
                            block
                            type="secondary"
                            size='default'>
                    Shop directory
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <div class="r-page-header-photo">
                <div class="r-page-white"
                     style="background-image: url('/assets/art-07.png')">
                </div>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <r-steps :has-more="false"></r-steps>
    <r-features :span="48"></r-features>
    <a-row class="r-mt-48" type="flex" justify="center">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[48,48]" type="flex" justify="end" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8}" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg class="ProductIcon ProductIcon--Payments ProductPricingSection__icon" width="80"
                                 height="80" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><title>
                              Payments logo</title>
                              <path
                                d="M34.61 11.28a2.56 2.56 0 0 0-1.22-1.04L8.54.2A2.57 2.57 0 0 0 5 2.6V15c0 1.05.64 2 1.61 2.4l6.44 2.6 21.56 8.72c.26-.4.4-.88.39-1.36V12.64c0-.48-.13-.96-.39-1.37z"
                                fill="#F50A2B"></path>
                              <path
                                d="M34.63 11.28L13.06 20l-6.45 2.6A2.58 2.58 0 0 0 5 25v12.42a2.58 2.58 0 0 0 3.54 2.39L33.4 29.76c.5-.21.93-.57 1.21-1.04.26-.41.4-.88.39-1.36V12.64c0-.48-.12-.95-.37-1.36z"
                                fill="#1B9BD9"></path>
                              <path
                                d="M34.62 11.28l.1.17c.18.37.28.77.28 1.19v-.03 14.75c0 .48-.13.95-.39 1.36L13.06 20l21.56-8.72z"
                                fill="#1B9BD9"></path>
                              <defs>
                                <linearGradient id="product-icon-payments-ProductPricingSection-a" x1="20" y1="4.13"
                                                x2="20" y2="21.13" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F50A2B"></stop>
                                  <stop offset="1" stop-color="#1B9BD9"></stop>
                                </linearGradient>
                                <linearGradient id="product-icon-payments-ProductPricingSection-b" x1="35" y1="11.28"
                                                x2="35" y2="28.72" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#1B9BD9"></stop>
                                  <stop offset="1" stop-color="#1B9BD9"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            Online and in-store options
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your
                            liking
                            and
                            shopping preferences.
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8}" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg class="Icon " viewBox="0 0 34 40" xmlns="http://www.w3.org/2000/svg" width="68"
                                 height="80">
                              <defs>
                                <clipPath id="documentsIconClipPath">
                                  <rect width="26" height="34" rx="2" class="Icon__blendBackground"
                                        fill="#1B9BD9"></rect>
                                </clipPath>
                              </defs>
                              <rect width="26" height="34" rx="2" class="Icon__blendBackground"
                                    fill="#1B9BD9"></rect>
                              <path
                                d="M30 6a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V10a4 4 0 0 1 4-4h18zm0 28H12v2h18v-2zm0-5h-4v2h4v-2zm-6 0H12v2h12v-2zm6-5H12v2h18v-2zm0-5H12v2h18v-2zm0-9h-6v2h6v-2zm-10 0h-8v2h8v-2z"
                                class="Icon__blendForeground" fill="#F50A2B"></path>
                              <g clip-path="url(#documentsIconClipPath)">
                                <path
                                  d="M30 6a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V10a4 4 0 0 1 4-4h18zm0 28H12v2h18v-2zm0-5h-4v2h4v-2zm-6 0H12v2h12v-2zm6-5H12v2h18v-2zm0-5H12v2h18v-2zm0-9h-6v2h6v-2zm-10 0h-8v2h8v-2z"
                                  class="Icon__blendForeground" fill="#F50A2B"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            One stop shopping platform
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your
                            liking
                            and
                            shopping preferences.
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
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8}" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg class="Icon " viewBox="0 0 39 37" xmlns="http://www.w3.org/2000/svg" width="78"
                                 height="74">
                              <defs>
                                <clipPath id="areaChartIconClipPath">
                                  <path
                                    d="M1.55 35.68l12.32-6.4a1 1 0 0 0 .44-.45L24.8 6.7a1 1 0 0 1 1.56-.33l12.3 10.64a1 1 0 0 1 .34.76V33a4 4 0 0 1-4 4H1.87a.7.7 0 0 1-.32-1.32z"
                                    class="Icon__blendBackground" fill="#1B9BD9"></path>
                                </clipPath>
                              </defs>
                              <path
                                d="M1.55 35.68l12.32-6.4a1 1 0 0 0 .44-.45L24.8 6.7a1 1 0 0 1 1.56-.33l12.3 10.64a1 1 0 0 1 .34.76V33a4 4 0 0 1-4 4H1.87a.7.7 0 0 1-.32-1.32z"
                                class="Icon__blendBackground" fill="#1B9BD9"></path>
                              <path
                                d="M.76 34.6L12.1 19.26a1 1 0 0 1 1.09-.37l11.65 3.4a1 1 0 0 0 1.17-.5L37.1.6a1 1 0 0 1 1.89.46V33a4 4 0 0 1-4 4H1.97a1.5 1.5 0 0 1-1.2-2.4z"
                                class="Icon__blendForeground" fill="#F50A2B"></path>
                              <g clip-path="url(#areaChartIconClipPath)">
                                <path
                                  d="M.76 34.6L12.1 19.26a1 1 0 0 1 1.09-.37l11.65 3.4a1 1 0 0 0 1.17-.5L37.1.6a1 1 0 0 1 1.89.46V33a4 4 0 0 1-4 4H1.97a1.5 1.5 0 0 1-1.2-2.4z"
                                  class="Icon__blendForeground" fill="#F50A2B"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            Instant checkout finance
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your
                            liking
                            and
                            shopping preferences.
                          </p>
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
  name: 'r-hiw',
  props: {},
  data() {
    return {
      modal: {
        isVisible: false,
        current: null,
        message: null,
      },
    }
  },
  mounted() {
    this.modal = this.$store.state.modal;
  },
  methods: {
    onStoreTray() {
      this.$store.dispatch('app/onStoreTray', true);
    },
  },
};
</script>
