<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
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
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col v-for="(benefit, index) in benefits"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-secondary-light">
                    <a-row :gutter="[24, 24]" align="middle" type="flex">
                      <a-col>
                        <div class="r-bg-dark r-p-12 r-border-radius-square">
                          <a-icon class="r-text-primary"
                                  :style="{ fontSize: '36px' }"
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
                            <h4 class="r-heading r-text-tertiary" v-html="benefit.title"></h4>
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
  name: 'r-partner-features',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'credit-card',
          title: '<span class="r-text-secondary">High</span> liquidity',
          content: 'Youkeep is powered by Solana, the world\'s fastest and ernergy serving blockchain technology. We leverage it\'s low processing fees and trickle down to the buyer plus 9% charge fee.'
        },
        {
          icon: 'shopping',
          title: '<span class="r-text-secondary">Instant</span> checkout',
          content: 'The collector\'s experience is fast and frictionless when buying with Youkeep. Go from browsing to collected in 25 seconds. That\'s up to 3x faster than other marketplace players.'
        },
        {
          icon: 'carry-out',
          title: '<span class="r-text-secondary">Personal</span> experience',
          content: 'With over thousands of users and followers, we can help you reach a large audience of collectors. With our multiple blockchains support, create, buy, and sell NFTs without paying any gas fee'
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
