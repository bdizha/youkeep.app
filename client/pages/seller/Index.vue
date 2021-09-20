<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" justify="start" align="middle" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">Sellers</span>
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        <span class="r-text-primary">Sell</span> more with Paise checkout
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Install the Paise checkout button today and boost sales, customer relationships and repeat purchases.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Join the thousands of businesses that use Paise to give their customers on demand, simple and secure payment options.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-secondary"
                                @click="onModal"
                                block
                                size="large"
                                type="blue"
                      >
                        Get started
                      </a-button>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/contact-us">
                        <a-button class="r-btn-bordered-primary"
                                  block
                                  size="large"
                                  type="blue"
                        >
                          See pricing
                          <a-icon type="right"></a-icon>
                        </a-button>
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-left" :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <r-slider :images="images"></r-slider>
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
      <r-seller-welcome></r-seller-welcome>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-tabs active-key="seller" theme="white"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-benefits></r-seller-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
        <div class="r-mv-96">
          <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-07.svg" :size="300"
                        class="r-avatar-block"
              ></r-avatar>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        Transform your business
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading">
                        <span class="r-text-primary">Delight</span> your customers with Paise
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Improve sales through higher conversion rates, on demand payment options
                        and reduced cart abandonment.
                      </p>
                    </a-col>
                    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Paise offers growing businesses a single and clear view into checkout activities including but not limited to:
                        instant orders, payment options, customer timeline, financing, and reporting.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"

                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col v-for="(benefit, index) in benefits"
                               :key="index"
                               :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-card class="r-bg-white">
                            <a-row :gutter="[24, 24]" type="flex">
                              <a-col flex="60px">
                                <a-icon class="r-text-primary"
                                        :style="{ fontSize: '60px' }"
                                        :type="benefit.icon"></a-icon>
                              </a-col>
                              <a-col flex="1 1 0">
                                <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <h4 class="r-heading-light">
                                      {{ benefit.title }}
                                    </h4>
                                  </a-col>
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us :has-more="true" title="Ready to sell with Paise?"
                    heading="Increase your average order value and drive conversions. Getting started is easy."
      ></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller',
  props: {},
  data () {
    return {
      images: [
        '/assets/asset-01.svg',
        '/assets/asset-08.svg'
      ],
      benefits: [
        {
          icon: 'line-chart',
          title: 'Boost your business sales',
          heading: '<span class="r-text-primary">Enable</span> seamless customer experience',
          content: 'Built to delight your customers while enabling your base line to thrive.'
        },
        {
          icon: 'gift',
          title: 'Obsess with your customer',
          heading: '<span class="r-text-primary">Offer</span> on demand payment options',
          content: 'It\'s never been easier to give your customers flexible payment options.'
        },
        {
          icon: 'dollar',
          title: 'Earn on demand payments',
          heading: '<span class="r-text-primary">Earn</span> more returning customers',
          content: 'Enable more buying shoppers and increase recurring orders with Paise.'
        }
      ]
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {}
}
</script>
