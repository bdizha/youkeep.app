<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">Partners</span>
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        <span class="r-text-primary">Partner</span> with Paise program today.
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        We work with leading e-commerce merchants, agencies, platforms, services, and tech solutions to
                        elevate the checkout experience online.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Join the thousands of businesses that use Paise to give their customers instant, secure and
                        friendly checkout options.
                        We partner with businesses of all types, from home services to auto and even legal.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/contact-us">
                        <a-button class="r-btn-primary"
                                  block
                                  size="large"
                                  type="blue"
                        >
                          Partner with us
                          <a-icon type="right"></a-icon>
                        </a-button>
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/assets/asset-16.svg" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col class="r-text-center" :lg="{ span: 12 }" :md="{ span: 12}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <h3 class="r-heading-light r-text-uppercase">
                        Find your fit
                      </h3>
                    </a-col>
                    <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Paise Partners
                      </h2>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h3 class="r-heading">
                                <span class="r-text-secondary">Technology</span> Partners
                              </h3>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                B2B E-COMMERCE PLATFORMS
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                B2B FINTECH
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                B2B E-COMMERCE & MARKETPLACE TECH
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <nuxt-link to="/contact-us">
                                <a-button block
                                          class="r-btn-primary"
                                          size="large"
                                          type="secondary"
                                >
                                  Partner with Us
                                  <a-icon type="right"></a-icon>
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >

                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h3 class="r-heading">
                                <span class="r-text-secondary">Agency & Referral</span> Partners
                              </h3>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                E-COMMERCE AGENCIES
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                REVOPS & FINANCIAL AGENCIES
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                FINANCIAL & ACCOUNTING ADVISORS
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <nuxt-link to="/contact-us">
                                <a-button block
                                          class="r-btn-secondary"
                                          size="large"
                                          type="secondary"
                                >
                                  Partner with Us
                                  <a-icon type="right"></a-icon>
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row class="r-text-center" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Partner with us
                  </h2>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Grow your business with unified merchant selling tools, made for modern businesses.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col v-for="(benefit, index) in benefits"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-icon class="r-text-secondary"
                                :style="{ fontSize: '60px' }"
                                :type="benefit.icon"
                        ></a-icon>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading" v-html="benefit.heading"></h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal">
                              {{ benefit.content }}
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
                <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                       :sm="{ span: 12 }"
                       :xs="{ span: 24 }"
                >
                  <a-button class="r-btn-bordered-secondary"
                            @click="onModal"
                            block
                            size="large"
                            type="blue"
                  >
                    Partner with Paise
                    <a-icon type="right"></a-icon>
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[48,48]" align="middle" justify="end" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        The Paise advantage
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading ">
                        Paise <span class="r-text-primary">enables</span> shoppers to purchase instantly on product
                        discovery
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Built for merchants, it helps boost sales and satisfied customers
                        exponentially.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Paise offers a delightful experience to shoppers with the most
                        convenient
                        shopping tools on the market.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 6 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/shop">
                        <a-button block
                                  class="r-btn-bordered-secondary"
                                  size="large"
                                  type="secondary"
                        >
                          Learn more
                        </a-button>
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-04.svg" :size="300"
                        class="r-avatar-block"
              ></r-avatar>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your business to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'shop',
          title: 'Sell with Paise',
          heading: '<span class="r-text-secondary">Monetize</span> digital sales',
          content: 'Drive passive income with endless scale by collecting a percentage of your client’s digital revenue.'
        },
        {
          icon: 'dollar',
          title: 'Lend with Paise',
          heading: '<span class="r-text-secondary">Get</span> more clients',
          content: 'We’re always looking for agencies and system integrators to help manage the growing demand for Paise.'
        },
        {
          icon: 'sync',
          title: 'Grow with Paise',
          heading: '<span class="r-text-secondary">Exposure</span>  & leadership',
          content: 'Share your expertise and get exposure to our audience of B2C, B2B e-commerce and marketplace leaders.'
        }
      ],
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: mapGetters({}),
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
