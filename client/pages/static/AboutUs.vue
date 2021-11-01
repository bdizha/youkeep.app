<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        Our mission
                      </h4>
                    </a-col>
                    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div style="width: 176px; height: 176px;display: block; background: #FFFFFF; position:relative; overflow: hidden; border-top-right-radius: 50%;">
                        <div class="r-diamond"></div>
                        <div class="r-diamond" style="left: 96px;"></div>
                        <div class="r-diamond" style="top: 96px;"></div>
                        <div class="diagonal-01"></div>
                        <div class="diagonal-02"></div>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading">
                       To <span class="r-text-primary">deliver</span> <span class="r-text-secondary">possibilities</span> to the world
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Our goal is to empower local businesses and in turn, generate new ways for people to earn, work and live.
                        We are 100% committed to providing Shoppers with a better checkout experience.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        We started by facilitating door-to-door delivery, but we see this as just the beginning of connecting people with possibility - easier evenings, happier days, bigger savings accounts, wider nets and stronger communities.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/assets/asset-11.svg" :size="300"
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
      <a-row :gutter="[48,48]" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-uppercase">
                Our vision
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                To <span class="r-text-primary">tackle</span> challenges of hunger and starvation
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                What started as a way to help growing artists to conveniently sell their best NFTs has grown into a leading online
                marketplace that connects millions of consumers with rare assets and marketplaces of all sizes.
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                We are doing this by taking a revolutionary approach, including addressing the systemic causes of hunger and leveraging appropriate technology, while simultaneously tackling the immediate NFTs security crisis through rescuing nutritious NFTs and delivering it where it’s needed most.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="top" class="r-text-left" justify="center" type="flex">
            <a-col v-for="(value, index) in values"
                   :key="index"
                   :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                  <a-col>
                    <div class="r-bg-primary r-p-24 r-border-radius-12">
                      <a-icon class="r-text-secondary"
                              :style="{ fontSize: '45px' }"
                              :type="value.icon"
                      ></a-icon>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading" v-html="value.title"></h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal r-text-dark">
                      {{ value.content }}
                      <nuxt-link class="r-text-primary" :to="value.route">
                        Learn more
                        <a-icon class="r-text-primary" type="right"></a-icon></nuxt-link>
                    </p>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-values></r-values>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Enjoy your favourite NFTs or discover new artists."></r-contact-us>
    </a-col>
  </a-row>
</template>
<style>
.r-diamond {
  position: absolute;
  width: 80px;
  height: 80px;
  left: auto;
  right: auto;
  bottom: auto;
  top: auto;
  background: #00C2FF;
}

.r-diamond:first-child {
  background: #00C2FF;
}

.r-diamond:nth-child(2) {
  background: #3B9CFF;
}

.diagonal-01 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 66px;
  right: auto;
  bottom: -49px;
  top: auto;
  transform: rotate(-45deg);
}

.diagonal-02 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 91px;
  right: auto;
  bottom: auto;
  top: -74px;
  transform: rotate(45deg);
}

.arrow-up {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid black;
}

.arrow-down {
  width: 0;
  height: 0;
  border-left: 40px solid transparent;
  border-right: 40px solid transparent;

  border-top: 40px solid #00C2FF;
}

.arrow-right {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;

  border-left: 40px solid #00C2FF;
}

.arrow-left {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;
  border-right:40px solid #3B9CFF;
}
</style>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      isProcessing: true,
      testimonials: [],
      modal: {
        current: null,
        isVisible: false
      },
      values: [
        {
          route: '/customer',
          icon: 'gift',
          title: 'For <span class="r-text-primary">collectors</span>',
          content: 'With your favorite marketplaces at your fingertips, Youkeep makes you unleash your dreams and connects you with possibilities - more time and energy for yourself and your direct or indirect beneficiaries.'
        },
        {
          route: '/artist',
          icon: 'fire',
          title: 'For <span class="r-text-primary">artists</span>',
          content: 'Delivering with Youkeep, you get flexibility and financial stability that you deserve. Youkeep for a living or for a goal, all on your controllable schedule and on your own terms.'
        },
        {
          route: '/seller',
          icon: 'hourglass',
          title: 'For <span class="r-text-primary">marketplaces</span>',
          content: 'Youkeep’s innovative seller-focused solutions enhance your success by transforming your business. Open your doors to an entire city and see your reach and revenue grow.'
        }
      ],
      hasData: false
    }
  },
  computed: mapGetters({
    store: 'base/store',
    category: 'base/category',
    categories: 'shop/categories',
    hasCategories: 'base/hasCategories'
  }),
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
