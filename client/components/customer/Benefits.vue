<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Benefits for collectors
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-tertiary">Enjoy</span> the finest NFT marketplace
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    With your favorite marketplaces at your fingertips, NFTs discovery is made easy for the finest
                    experience.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    Youkeep makes you unleash your dreams and connects you with possibilities - more time and energy for
                    yourself and your beneficiaries.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <r-avatar data-src="/assets/asset-05.svg" :size="300"
                        class="r-avatar-block"
              ></r-avatar>
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
                  <a-card class="r-bg-primary-light">
                    <a-row :gutter="[24, 24]" align="middle" type="flex">
                      <a-col>
                          <a-card class="r-bg-dark r-p-0 r-border-circle">
                          <div class="r-p-12">
                            <a-icon class="r-text-tertiary"
                                    theme="filled"
                                    :style="{ fontSize: '45px' }"
                                    :type="benefit.icon"
                            ></a-icon>
                          </div>
                        </a-card>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light">
                              {{ benefit.title }}
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading" v-html="benefit.heading"></h4>
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
  name: 'r-customer-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'picture',
          heading: '<span class="r-text-secondary">Support</span> network artists',
          content: 'Unlike other NFTs outlets, you know exactly who\'s owned NFT asset you collect. Discover form with top collections and more.'
        },
        {
          icon: 'appstore',
          heading: '<span class="r-text-secondary">Discover</span> authentic NFTs',
          content: 'Connect with your favourite crypto wallet and and start collecting assets while you earn as you transact on the $keep marketplace.'
        },

        {
          icon: 'fire',
          heading: '<span class="r-text-secondary">Unleash</span> your dreams',
          content: 'Enjoy on-demand original NFTs by network artists fast and easy, with real-time liquidity, without sacrificing time and security.'
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
