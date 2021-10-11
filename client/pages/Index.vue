<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row align="middle" justify="center" type="flex">
            <a-col class="r-text-left" :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col v-for="(image, index) in images"
                       v-if="index < 3"
                       :key="index"
                       :lg="{ span: index === 0 ? 24 : 12 }" :md="{ span: index === 0 ? 24 : 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                 <a-card class="r-bg-secondary-light r-radius-circle">
                   <r-avatar :data-src="image" :size="300"
                             class="r-avatar-block"
                   ></r-avatar>
                 </a-card>
                  </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row justify="center" align="middle" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase">
                        Good time, great meals!
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading">
                        <span v-show="isActive(1)" class="r-text-secondary r-text-animate">Instant</span>
                        <span v-show="isActive(2)" class="r-text-secondary r-text-animate">Authentic</span>
                        <span v-show="isActive(3)" class="r-text-secondary r-text-animate">Homemade</span>
                        <span v-show="isActive(4)" class="r-text-secondary r-text-animate">Flavoured</span>
                        dishes delivered to your door.
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Explore who's cooking in
                        your neighborhood.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                     <r-delivery-form></r-delivery-form>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col class="r-text-left" :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col v-for="(image, index) in images"
                       v-if="index > 2"
                       :key="index"
                       :lg="{ span: index === 5 ? 24 : 12 }" :md="{ span: index === 5 ? 24 : 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-card class="r-bg-secondary-light">
                    <r-avatar :data-src="image" :size="300"
                              class="r-avatar-block"
                    ></r-avatar>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }">
      <r-customer-benefits></r-customer-benefits>
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
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-featured></r-seller-featured>
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
                        Signing up with Spazastop is simple and only takes a few minutes. Discover new products. Start
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
                              Choose to be a Spazastop Seller today and start achieving your goals.
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
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your taste to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import { setInterval } from 'timers'
import RMetrics from '../components/global/Metrics'

export default {
  components: { RMetrics },
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      images: [
        '/products/product-01.svg',
        '/products/product-02.svg',
        '/products/product-03.svg',
        '/products/product-04.svg',
        '/products/product-05.svg',
        '/products/product-11.svg'
      ],
      step: 1,
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: {
  },
  async created () {
    await this.rotate()
  },
  methods: {
    isActive (step) {
      return step === this.step
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
    rotate () {
      setInterval(() => {
        this.step = this.step > 3 ? 1 : this.step + 1
      }, 3000)
    }
  }
}
</script>
