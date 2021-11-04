<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
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
                      <h4 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">Partners</span>
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Welcome to the world's most authentic NFT marketplace.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        At Youkeep, we're excited about a brand new type of digital good often referred to as a
                        non-fungible token, or NFT. NFTs have exciting new properties: they’re unique, provably scarce,
                        liquid, and usable across multiple applications.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        We’re proud to be the first and largest marketplace for user-owned digital goods, with
                        everything you need to buy and sell them in one place. Learn more about us
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
                  <r-avatar data-src="/assets/asset-02.svg" :size="300"
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
      <a-row justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-partner-welcome></r-partner-welcome>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-partner-benefits></r-partner-benefits>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-partner-features></r-partner-features>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-partner-testimonials></r-partner-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-partner-advantage></r-partner-advantage>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Interested in partnering with us today?" theme="tertiary"></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import RPartnerBenefits from '../../components/partner/Benefits'

export default {
  components: { RPartnerBenefits },
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
