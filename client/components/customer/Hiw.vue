<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Features for partners
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-secondary">Enable</span> retailers to succeed
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Provide your sellers with a solution that offers a smoooth shopper experience, and enable them
                    to reach millions of collectors worldwide.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    With no added cost and instant payments, shopping is just as easy as making any regular card purchase. More freedom means happy, returning collectors.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col v-for="(benefit, index) in benefits"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row :gutter="[24, 24]" align="middle" type="flex">
                      <a-col>
                        <div class="r-bg-secondary-light r-p-12 r-border-radius-12">
                          <a-icon class="r-text-secondary"
                                  :style="{ fontSize: '45px' }"
                                  :type="benefit.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading" v-html="benefit.title"></h4>
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
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-customer-hiw',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'credit-card',
          title: '<span class="r-text-secondary">Flexible</span> payments',
          content: 'When using 4 interest-free payments, collectors make their first payment upfront and their remaining 3 payments are collected automatically every 2 weeks.'
        },
        {
          icon: 'shopping',
          title: '<span class="r-text-secondary">Instant</span> checkout',
          content: 'The customer experience is fast and frictionless when buying with Youkeep. Go from browsing to bought in 25 seconds. That\'s up to 3x faster than competitors.'
        },
        {
          icon: 'carry-out',
          title: '<span class="r-text-secondary">Personal</span> experience',
          content: 'Returning Youkeep shoppers are treated like returning collectors for you. Details are pre-filled and preferred shipping and NFT collectibles are pre-selected.'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
