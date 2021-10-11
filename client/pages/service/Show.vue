<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-pull-h-24 r-border-none" :class="getBgClass(false)">
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-row :gutter="[96,96]" justify="start" align="middle" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <div class="r-mv-48">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase" v-html="product.title"></h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading" v-html="product.heading">
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        {{ product.summary }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal r-text-dark" v-html="product.content">
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <r-button title="Get started" size="large" action="register"></r-button>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <r-link route="/shop" title="Order now" size="large" theme="bordered-primary"></r-link>
                    </a-col>
                  </a-row>
                </div>
              </a-col>
              <a-col class="r-text-left" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <r-slider :images="product.images"></r-slider>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-steps user-type="customer" :title="product.title" :size="24" :steps="product.steps" theme="primary"
      ></r-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-pull-h-24 r-border-none" :class="getBgClass()">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
          >
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 12 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase" :class="getTextClass()">
                    Product Features
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                    <a-col v-for="(feature, index) in product.features"
                           :key="index"
                           :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-card :class="getBgClass(true)">
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col>
                            <a-card class="r-text-center" :class="getBgClass(false)">
                              <a-icon :class="getTextClass()"
                                      style="font-size: 60px"
                                      :type="feature.icon"
                              ></a-icon>
                            </a-card>
                          </a-col>
                          <a-col :lg="{ span: 18 }" :md="{ span: 16 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h4 class="r-heading" v-html="feature.title"></h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <p class="r-text-normal" v-html="feature.content">
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
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-services v-if="hasData" :is-show="true"></r-services>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  async asyncData ({ store, params }) {
    const slug = params.slug

    console.log('service params', params)

    await store.dispatch('content/onProduct', slug)
  },
  data () {
    return {
      hasData: true,
      steps: [
        {
          title: 'Adaptive checkout\n',
          heading: '<span class="r-text-primary">Improve</span> customer satisfaction',
          image: '/assets/asset-11.svg',
          summary: 'Build online experiences that meet the expectations of your customers.',
          content: 'Let your shoppers get what they want, when they want it, anytime, everywhere. And your business will earn long-term customer relationships.'
        },
        {
          title: 'Boost Conversion',
          heading: '<span class="r-text-primary">Boost</span> visibility with shoppers',
          image: '/assets/asset-05.svg',
          summary: 'Shoppers use Zerosum to discover new products and checkout in seconds. ',
          content: 'Zerosum enables instant mobile shopping by making the online checkout as simple and fast as the offline one, without requiring retailers to implement anything.'
        },
        {
          title: 'Maximize Revenue',
          heading: '<span class="r-text-primary">Sell</span> and maximise revenue',
          image: '/assets/asset-12.svg',
          summary: 'Get the Zerosum Capital button in a few minutes on your online marketplace.',
          content: 'Meet potential customers at the point of discovery abd break out and reach new shoppers beyond the walls of your own marketplace.'
        }
      ]
    }
  },
  computed: {
    ...mapGetters({
      products: 'content/products',
      product: 'content/product'
    })
  },
  created () {
    this.hasData = true
  },
  methods: {
    getBgClass (isToggled) {
      const theme = isToggled ? `${this.product.theme}-light` : `white-${this.product.theme}`

      return `r-bg-${theme}`
    },
    getTextClass () {
      return `r-text-${this.product.theme}`
    },
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
