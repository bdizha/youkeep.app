<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="">
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
        <a-card class="">
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
    <r-features :span="24"></r-features>
    <a-row class="r-mt-48" type="flex" justify="justify">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card class="">
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 10 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35" xmlns="http://www.w3.org/2000/svg">
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
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            Online and in-store options
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your liking
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
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card class="">
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 10 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35" xmlns="http://www.w3.org/2000/svg">
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
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            One stop shopping platform
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your liking
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
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card class="">
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 10 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg class="Icon " width="80" height="70" viewBox="0 0 40 35" xmlns="http://www.w3.org/2000/svg">
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
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            Instant checkout finance
                          </h4>
                          <p class="r-text-normal">
                            We're changing how shopping is experienced. Get new products served to you based on your liking
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
