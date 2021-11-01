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
                        <span class="r-text-primary">Partner</span> with Youkeep.
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        We work with leading e-commerce merchants, agencies, platforms, services, and tech solutions to
                        elevate the revenue-based financing solutions.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Join the thousands of businesses that use Youkeep to grow their businesses and achieve their
                        goals and objectives.
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
                                  type="primary"
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
                  <r-avatar data-src="/assets/asset-03.svg" :size="300"
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
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
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
                        Grow your business with unified merchant financing tools, made for modern businesses.
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
                      <a-card class="r-bg-primary-light">
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary"
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
                      <a-button class="r-btn-bordered-primary"
                                @click="onModal"
                                block
                                size="large"
                                type="primary"
                      >
                        Partner with Zerosum
                        <a-icon type="right"></a-icon>
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col v-for="(partner, index) in partners"
               :key="index"
               :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light">
            <div class="r-mv-48">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading" v-html="partner.title"></h3>
                </a-col>
                <a-col v-for="(row, index) in partner.rows"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <h4 class="r-heading" v-html="row.title">
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        {{ row.content }}
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 12 }"
                       :xs="{ span: 24 }"
                >
                  <nuxt-link to="/contact-us">
                    <a-button class="r-btn-bordered-secondary"
                              block
                              size="large"
                              type="primary"
                    >
                      Partner with us
                      <a-icon type="right"></a-icon>
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary-light r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
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
                        The Zerosum advantage
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading ">
                        Zerosum <span class="r-text-primary">enables</span> fast and easy financing solution to expanding brands.
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Built for merchants, it helps accelerates the capital you need to fund growth exponentially.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Zerosum offers a delightful experience to brands and investors with the most
                        convenient
                        credit platform on the market.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/calculator">
                        <a-button block
                                  class="r-btn-bordered-primary"
                                  size="large"
                                  type="primary"
                        >
                          Learn more
                        </a-button>
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
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
          title: 'Sell with Zerosum',
          heading: '<span class="r-text-primary">Monetize</span> digital sales',
          content: 'Drive passive income with endless scale by collecting a percentage of your client’s digital revenue.'
        },
        {
          icon: 'dollar',
          title: 'Lend with Zerosum',
          heading: '<span class="r-text-primary">Get</span> more clients',
          content: 'We’re always looking for agencies and system integrators to help manage the growing demand for Zerosum.'
        },
        {
          icon: 'sync',
          title: 'Grow with Zerosum',
          heading: '<span class="r-text-primary">Exposure</span>  & leadership',
          content: 'Share your expertise and get exposure to our audience of B2C, B2B e-commerce and marketplace leaders.'
        }
      ],
      partners: [
        {
          title: 'Agency Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Grow </span> your clients’ marketing budget',
              content: 'Zerosum is an inexpensive way for your D2C eCommerce clients to increase their marketing budgets substantially, resulting in more opportunities for growth on your end.'
            },
            {
              title: '<span class="r-text-primary">Revenue</span>  Share opportunity',
              content: 'Add incremental revenue streams for your agency by participating in our revenue share program'
            }
          ]
        },
        {
          title: 'Tech Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Co-marketing</span> opportunities',
              content: 'Zerosum serves hundreds of D2C eCommerce brands with the funds they need to grow. Our audience includes founders/CEOs and CFOs.'
            },
            {
              title: '<span class="r-text-primary">Revenue</span>  Share opportunity',
              content: 'Add incremental revenue streams for your business by participating in our revenue share program'
            }
          ]
        },
        {
          title: 'VC Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Zero-equity</span> financing',
              content: 'Grow the marketing budgets of the companies in your portfolio and grow faster with unsecured and non-dilutive capital.'
            },
            {
              title: '<span class="r-text-primary">Scale</span>  faster with better visibility',
              content: 'D2C founders struggle with two things: unlocking funds, and knowing where to spend them - we solve both.'
            }
          ]
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
