<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-pull-h-24 r-border-none r-card-r-128">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" justify="start" type="flex">
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
                              Look no further
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-uppercase">
                            <span class="r-text-primary">Innovative</span><br>
                            <span class="r-text-yellow">Product</span><br>
                            <span class="r-text-secondary">Discovery</span>
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your categories</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your schedule</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your success</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
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
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-avatar data-src="/images/content/happy-2.jpg" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
            <div class="r-cover-image-half" style="background-image:url(/images/content/happy-2.jpg)"></div>
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
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                It’s the new, <span class="r-text-primary">easier</span> way to invest in <span
                class="r-text-secondary"
              >property</span>.
              </h2>
            </a-col>
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                Traditionally inventing in real estate hasn’t been available to most low income investors without either
                meeting high net worth requirements or going through a complex and inefficient process, riddled with
                high fees and outdated middlemen.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/images/content/apartment-3.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 8 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-1.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-2.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" align="top" justify="start" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-shade-secondary">
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Make real progress
                        </h4>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading-light r-text-dark">
                        <span class="r-text-primary">Think</span> long term and earn quality returns
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Now you can diversify outside of the public markets with private real estate, allowing you to
                        reduce risk and improve stability.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" align="top" justify="end" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-shade-primary">
                        <h4 class="r-heading-light r-text-primary r-text-uppercase">
                          Build credit line
                        </h4>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading-light r-text-dark">
                        Keep <span class="r-text-primary">cash</span> available in your Bricks
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        The fees you pay affect your bottom line. Our proprietary software helps us reduce costs, which
                        means we can charge lower fees, so you can maximize your returns.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/images/content/apartment-11.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/images/content/apartment-14.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 8 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-12.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-13.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/images/content/apartment-8.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-9.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 12 }"
                    >
                      <r-avatar data-src="/images/content/apartment-10.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-shade-secondary">
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Smart auto-invest
                        </h4>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading-light r-text-dark">
                        A little every day quickly <span class="r-text-primary">adds</span> up
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Invest and manage your portfolio through our easy-to-use website and mobile app. Track your
                        performance and watch as properties across the country are acquired, improved, and operated via
                        dynamic asset updates.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-dark"
                                @click="onModal"
                                size="large"
                                type="blue"
                      >
                        Get started
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row class="r-text-center" :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading-light r-text-yellow r-text-uppercase">
                    It's easy to get started.
                  </h3>
                </a-col>
                <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Signing up with Addtract is simple and only takes a few minutes. Earn any capital returns in line
                    with property price changes when you sell your Bricks
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                       class="r-text-left"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <r-avatar data-src="/images/content/step-1.svg" :size="120" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-primary">Tell</span> us about your goals.
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <p class="r-text-normal r-text-dark">
                          We’ll suggest the strategy that best fits your goals.
                        </p>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
                <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                       class="r-text-left"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <r-avatar data-src="/images/content/step-2.svg" :size="120" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-secondary">Select</span> an investment plan.
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <p class="r-text-normal r-text-dark">
                          Choose between the suggested strategy or pick yourself.
                        </p>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
                <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                       class="r-text-left"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <r-avatar data-src="/images/content/step-3.svg" :size="120" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-primary">Earn</span> returns over time.
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                      >
                        <p class="r-text-normal r-text-dark">
                          Continue to invest over time either manually or automatically.
                        </p>
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
