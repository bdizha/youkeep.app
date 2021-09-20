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
                        It's shopping time!
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        <span v-show="step === 1" class="r-text-primary r-text-animate">Instant</span>
                        <span v-show="step === 2" class="r-text-secondary r-text-animate">Simple</span>
                        <span v-show="step === 3" class="r-text-yellow r-text-animate">Secure</span>
                        checkout experience.
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Checkout anywhere online in a few seconds.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        With Paise, you no longer need to pull out your credit card or enter long forms to complete
                        online purchases.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-primary"
                                @click="onModal"
                                block
                                size="large"
                                type="blue"
                      >
                        Shop with Paise
                      </a-button>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/shopper">
                        <a-button class="r-btn-bordered-secondary"
                                  block
                                  size="large"
                                  type="secondary"
                        >
                          Learn more <a-icon type="right"></a-icon>
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
    <a-col v-if="false" :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-tabs active-key="shopper" theme="white"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <r-seller-services></r-seller-services>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-welcome></r-customer-welcome>
    </a-col>
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[96,48]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <div class="r-mv-48">
                            <a-row :gutter="[48,24]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h1 class="r-heading r-text-primary">
                                  Discover great <br>value
                                </h1>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Personalized Discovery
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal r-text-primary">
                                          Discover brands and products faster with a buyer homepage that highlights
                                          trends,
                                          collections, and more in a single place.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Top trending products
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          View products that are trending in Nielsen category sales, or showing
                                          follower growth
                                          on Instagram.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Curated Collections
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          Review curated brands and products in your category with trending
                                          collections like
                                          diversity and sustainability.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                </a-row>
                              </a-col>
                              <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                                     :sm="{ span: 12 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-button class="r-btn-primary"
                                          @click="onModal"
                                          block
                                          size="large"
                                          type="blue"
                                >
                                  Get started
                                </a-button>
                              </a-col>
                            </a-row>
                          </div>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row :gutter="[48,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[96,48]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <r-avatar data-src="/images/content/step-seller-03-primary.png" :size="300"
                                    class="r-avatar-block"
                          ></r-avatar>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <div class="r-mv-48">
                            <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h1 class="r-heading r-text-secondary">
                                  Up-scale your sales
                                </h1>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <h4 class="r-heading-light r-text-secondary">
                                            farm profile
                                          </h4>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal r-text-dark">
                                            Build visibility with leading retailers and food outlets by highlighting key
                                            brand
                                            information that shoppers look for.
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-medium r-text-secondary">
                                            Product Pages
                                          </p>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal r-text-dark">
                                            Customize product pages to show shoppers essential product and company
                                            details
                                            like MSRP, price margins, packaging dimensions, and more.
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-medium r-text-secondary">
                                            Profile Sharing
                                          </p>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal r-text-dark">
                                            Share your farm profile with shoppers on and off of AddTract and track
                                            engagement
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
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
                                </a-row>
                              </a-col>
                            </a-row>
                          </div>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading r-text-primary">
                        It's easy to get started.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Signing up with Paise is simple and only takes a few minutes. Discover new products. Start
                        connecting.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-left" justify="center" type="flex">
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                Create an account
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              Choose to be a Paise Seller today and start achieving your goals.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                 Setup your store
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              Your categories are showcased on our platform to relevant shoppers.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left r-text-secondary" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                Start accepting orders
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium r-text-dark">
                              Seamlessly sell products that meet your customer's unique demands.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col v-if="false">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your shopping to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import { setInterval } from 'timers'

export default {
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      images: [
        '/assets/asset-02.svg',
        '/assets/asset-06.svg',
        '/assets/asset-05.svg',
        '/assets/asset-03.svg'
      ],
      step: 1,
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: mapGetters({
    store: 'base/store',
    category: 'base/category',
    categories: 'shop/categories',
    hasCategories: 'base/hasCategories'
  }),
  async created () {
    await this.rotate()
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
    rotate () {
      setInterval(() => {
        if (this.step > 2) {
          this.step = 1
        } else {
          this.step += 1
        }
      }, 3000)
    }
  }
}
</script>
