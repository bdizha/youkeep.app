<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none r-card-r-128">
            <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-48">
                      <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-primary r-text-uppercase">
                            Our pans
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading">
                            <span class="r-text-secondary">Pricing</span>
                            <span class="r-text-dark">built for businesses of all sizes.</span>
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Always know what you’ll pay right away. That way there's no surprises on your monthly invoice to worry about.
                          </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
            <a-col v-for="(plan, index) in plans"
                   :key="index"
                   :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-card :hoverable="true" class="r-bg-primary-light"
                      @click="setCurrentPlan(index)"
                      :class="getBgClass(index)">
                <a-card class="r-bg-white">
                  <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <h3 class="r-heading" :class="getTextClass(index)">
                        {{ plan.title }}
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <p class="r-text-medium r-text-dark">
                        {{ plan.heading }}
                      </p>
                    </a-col>
                    <a-col class="r-text-left" v-for="(feature, index) in plan.features"
                           :key="index"
                           :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                    >
                      <div class="r-checked-item r-text-left">
                        <a-icon class="r-checked-item-icon" type="check"></a-icon>
                        <span class="r-text-normal r-text-dark">{{ feature }}</span>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                    >
                      <h4 class="r-heading r-text-dark">
                        {{ plan.price }}
                        <span class="r-text-light">
                         {{ plan.frequency }}
                       </span>
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-button :class="getBtnClass(index)"
                                @click="setCurrentPlan(index)"
                                block
                                size="large"
                                type="blue"
                      >
                        {{ plan.action }}
                      </a-button>
                    </a-col>
                  </a-row>
                </a-card>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-index',
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
  },
  data () {
    return {
      currentPlan: 2,
      plans: [
        {
          title: 'Core',
          theme: 'blue',
          heading: 'The core features for individuals and merchants',
          price: 'Free',
          frequency: null,
          action: 'Continue for free',
          features: [
            'Unlimited public/private store integrations',
            'Free for any type of merchant store requirements',
            'Limited to 3,600 action calls / month',
            'Limited to a total of 6GB of catalog storage',
            'Access to technical and community support via email',
            'Access to a comprehensive documentation',
            'No setup fees, monthly fees, or hidden fees'
          ]
        },
        {
          title: 'Merchant',
          theme: 'green',
          heading: 'Merchant platform with simple, pay-as-you-go pricing',
          price: 'ZAR4,500',
          frequency: '/ integration / month',
          action: 'Continue with merchant',
          features: [
            'Everything included in the Core plan, plus... ',
            'Unlimited public/private store integrations',
            'Limited to 9,000 action calls / month',
            'Limited to a total of 60GB of catalog storage',
            'Configurable to use your existing domain for your store',
            'Free for experimental usage during your trial period',
            'Access to comprehensive documentation'
          ]
        },
        {
          title: 'Enterprise',
          theme: 'primary',
          heading: 'Custom package for your business',
          price: 'ZAR1,600',
          frequency: '/ user / month',
          action: 'Contact Sales',
          features: [
            'Everything included in the Merchant plan, plus... ',
            'Available for businesses with large product catalog',
            'Country-specific rates (delivery, processing fees)',
            'Elastic multi-store AI powered capabilities',
            'Elastic action calls / month based on demand',
            '1 month trial for experimental use cases',
            '24/7 access to premium technical support via all channels'
          ]
        }
      ]
    }
  },
  computed: mapGetters({
  }),
  created () {
  },
  methods: {
    setCurrentPlan (currentPlan) {
      this.currentPlan = currentPlan
    },
    getBgClass (index) {
      return index === this.currentPlan ? 'r-bg-primary' : 'r-bg-primary-light'
    },
    getTextClass (index) {
      return index === this.currentPlan ? 'r-text-primary' : 'r-text-dark'
    },
    getBtnClass (index) {
      return index === this.currentPlan ? 'r-btn-primary' : 'r-btn-bordered-primary'
    }
  }
}
</script>
