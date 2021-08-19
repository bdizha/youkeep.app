<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-pull-h-24 r-border-none r-card-r-128">
            <a-row :gutter="[48,48]" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-primary r-text-uppercase">
                            Think long term
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-uppercase">
                            Invest <span class="r-text-primary">smart</span>,<br>
                            Earn <span class="r-text-secondary">more</span>.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Auto returns at 10.00% annually</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Own quality yield property Bricks</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Smart way to invest in property</span>
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
                            Brickcent is designed to utilise technology to make high-quality real estate investments
                            affordable to everyone. We combine state-of-the-art technology with in-house expertise to
                            reduce fees and maximize your long-term return potential.
                          </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
            <div class="r-cover-image" style="background-image:url(/images/content/happy-2.jpg)"></div>
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
                  <h3 class="r-heading-light r-text-blue r-text-uppercase">
                    It's easy to get started.
                  </h3>
                </a-col>
                <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Signing up with Brickcent is simple and only takes a few minutes. Earn any capital returns in line
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
