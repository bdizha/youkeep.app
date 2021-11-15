<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
        <div class="r-mv-96">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" justify="start" align="middle" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">Artists</span>
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading">
                        <span class="r-text-primary">Earn</span> money doing what you love
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Get started today and collectors can start minting from you on Youkeep.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Join the thousands of artists that use Youkeep selling tools to give their collectors on-demand, easy and better collectibles.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <r-button title="Get started" size="large" action="register" theme="primary"></r-button>
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
                <a-col class="r-text-left" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
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
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-artist-features></r-artist-features>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-artist-steps></r-artist-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-artist-benefits></r-artist-benefits>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-artist-testimonials></r-artist-testimonials>
    </a-col>
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
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
                <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        Transform your life
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading">
                        <span class="r-text-primary">Delight</span> your collectors with Youkeep
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Improve sales through higher conversion rates, on demand NFT collectibles
                        and reduced inconverted asset views.
                      </p>
                    </a-col>
                    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Youkeep offers growing artists a unified marketplace including but not limited to:
                        instant offers, NFT collectibles, air drops, purchase history, asset analytics, and on demand liquidity.
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
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us :has-more="true" title="Ready to collect with Youkeep?"
                    heading="Increase your average asset value and unleash your dreams. Getting started is easy."
      ></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {},
  data () {
    return {
      images: [
        '/assets/asset-19.svg'
      ],
      benefits: [
        {
          icon: 'line-chart',
          title: 'Boost your business sales',
          heading: '<span class="r-text-primary">Enable</span> seamless customer experience',
          content: 'Built to delight your collectors while enabling your base line to thrive.'
        },
        {
          icon: 'gift',
          title: 'Obsess with your customer',
          heading: '<span class="r-text-primary">Offer</span> on demand NFT collectibles',
          content: 'It\'s never been easier to give your collectors flexible NFT collectibles.'
        },
        {
          icon: 'dollar',
          title: 'Earn on demand payments',
          heading: '<span class="r-text-primary">Earn</span> more returning collectors',
          content: 'Enable more buying shoppers and increase recurring orders with Youkeep.'
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
