<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Benefits for artists
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-primary">Delight</span> your collectors with stackable collectibles
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Youkeep enables artists to expand their revenue by building experiences that meet their customer's expectations.
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
                  <a-card class="r-bg-tertiary-light">
                    <a-row :gutter="[24, 24]" type="flex" align="middle">
                      <a-col>
                        <div class="r-bg-primary-light r-p-12 r-border-radius-square">
                          <a-icon class="r-text-secondary"
                                  theme="filled"
                                  :style="{ fontSize: '36px' }"
                                  :type="benefit.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                          <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
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
  name: 'r-artist-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'thunderbolt',
          title: 'On-demand NFT options',
          heading: '<span class="r-text-primary">Enable</span> seamless customer experience',
          content: 'Built to delight your collectors while enabling your base line to thrive and unleash new depths.'
        },
        {
          icon: 'safety-certificate',
          title: 'Food safety training',
          heading: '<span class="r-text-primary">Earn</span> an accredited NFTs safety certification',
          content: 'It\'s never been easier to give your collectors flexible and trustable NFT options for keeping or reselling.'
        },
        {
          icon: 'pie-chart',
          title: 'Trusted by thousands of collectors',
          heading: '<span class="r-text-primary">Play</span> to earn returning audiences',
          content: 'Satisfy more attuned audience spaces and multiple your income streams with Youkeep\'s Play to Earn service.'
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
