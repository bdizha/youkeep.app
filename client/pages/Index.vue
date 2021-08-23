<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none r-card-r-128">
            <div class="r-mv-48">
              <a-row :gutter="[96,48]" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-uppercase">
                            Look <span class="r-text-primary">no further</span>
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-uppercase">
                            <span class="r-text-primary">Sell</span>
                            <span class="r-text-dark">smart</span>,<br>
                            <span class="r-text-secondary">Find</span>
                            <span class="r-text-dark">products</span>.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Connect and do business</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Streamline product discovery</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Grow your retail relationships</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <a-button class="r-btn-yellow"
                                    @click="onModal"
                                    block
                                    size="large"
                                    type="blue"
                          >
                            Get started
                          </a-button>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Addtract is designed to utilise technology to make high-quality selling tools
                            affordable to everyone. We combine state-of-the-art technology with in-house expertise to
                            reduce fees and maximize your long-term business connections.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col style="z-index: 1000" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/images/content/happy-2.jpg" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
            <div class="r-cover-image-half" style="background-image:none; background-color: #FFFFFF"></div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading-light">
                A single place to <span class="r-text-secondary">discover</span> thousands of innovative products
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                The industry standard platform for retail product discovery and sourcing.
              </p>
            </a-col>
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 12 }"
                   :xs="{ span: 24 }"
            >
              <a-button class="r-btn-secondary"
                        @click="onModal"
                        block
                        size="large"
                        type="blue"
              >
                Get started for free
              </a-button>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
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
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <r-avatar data-src="/images/content/step-customer-02-secondary.png" :size="300"
                                    class="r-avatar-block"
                          ></r-avatar>
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
                                            Brand Profile
                                          </h4>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal r-text-dark">
                                            Build visibility with leading retailers by highlighting key brand information that buyers look for.
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
                                          Customize product pages to show buyers essential product and company details like MSRP, price margins, packaging dimensions, and more.
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
                                          Share your brand profile with buyers on and off of AddTract and track engagement
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
              <a-row class="r-text-center" :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
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
                        Signing up with Addtract is simple and only takes a few minutes. Discover new products. Start connecting.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center" justify="center" type="flex">
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
                              Choose to be a Addtract Seller today and start achieving your goals.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center" justify="center" type="flex">
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
                              Your categories are showcased on our platform to relevant customers.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center r-text-yellow" justify="center" type="flex">
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
    <a-col v-if="false" :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'single',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('base/onReviews', {})
  },
  data () {
    return {
      banner: 'art-01.png',
      isProcessing: true,
      testimonials: [],
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
