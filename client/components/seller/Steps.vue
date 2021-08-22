<template>
  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-card class="r-bg-primary r-pull-h-24 r-border-none">
        <div class="r-mb-48">
          <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <div class="r-mv-48">
                      <a-card class="r-bg-white" style="margin-top: -96px">
                        <div class="r-mv-48">
                          <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                            <a-col :lg="{ span: 16 }" :md="{ span: 18}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h3 class="r-heading-light r-text-primary r-text-uppercase">
                                {{ title }}
                              </h3>
                            </a-col>
                            <a-col :lg="{ span: 16 }" :md="{ span: 18}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium r-text-dark">
                                Built for retail businesses, it offers a clear view into product purchase activity with automated billing, expensing, and reporting.
                              </p>
                            </a-col>
                            <a-col v-if="!hasMore" :lg="{ span: 9 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <nuxt-link to="/customer/membership">
                                <a-button block
                                          class="r-btn-primary"
                                          size="large"
                                          type="secondary"
                                >
                                  Discover More
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </div>
                      </a-card>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <r-avatar :size="300"
                                        :data-src="'/images/content/step-' + userType + '-01' + '-' + theme + '.png'"
                                        class="r-avatar-block"
                                        shape="square"
                                        src-placeholder="/assets/icon_default.png"
                                        unit="px"
                              />
                            </a-col>
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading-light r-text-uppercase">
                                    <span class="r-text-yellow">{{ steps[0].title }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading">
                                    <span class="r-text-white">{{ steps[0].heading }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <p class="r-text-medium r-text-white">
                                    {{ steps[0].content }}
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading-light r-text-uppercase">
                                    <span class="r-text-yellow">{{ steps[1].title }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading">
                                    <span class="r-text-white">{{ steps[1].heading }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <p class="r-text-medium r-text-white">
                                    {{ steps[1].content }}
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <r-avatar :size="300"
                                        :data-src="'/images/content/step-' + userType + '-02' + '-' + theme + '.png'"
                                        class="r-avatar-block"
                                        shape="square"
                                        src-placeholder="/assets/icon_default.png"
                                        unit="px"
                              />
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <r-avatar :size="300"
                                        :data-src="'/images/content/step-' + userType + '-03' + '-' + theme + '.png'"
                                        class="r-avatar-block"
                                        shape="square"
                                        src-placeholder="/assets/icon_default.png"
                                        unit="px"
                              />
                            </a-col>
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading-light r-text-uppercase">
                                    <span class="r-text-yellow">{{ steps[2].title }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <h3 class="r-heading">
                                    <span class="r-text-white">{{ steps[2].heading }}</span>
                                  </h3>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                  <p class="r-text-medium r-text-white">
                                    {{ steps[2].content }}
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-seller-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'seller',
      currentStep: 0,
      title: 'Addtract connects suppliers to retailers.',
      content: 'Addtract offers stores likes yours to sell products to our customers with the most convenient business tools on the market.',
      steps: [
        {
          title: 'List It',
          heading: 'Showcase your products',
          content: 'Your brand profile is a customizable digital sell sheet that highlights key product, brand, and company details all in a single place.'
        },
        {
          title: 'Sell It',
          heading: 'Get discovered',
          content: 'Buyers use Addtract to discover new products and manage their inbound submissions. Your products are placed in front of relevant buyers in your category.'
        },
        {
          title: 'Get Paid',
          heading: 'Connect and do business',
          content: 'Buyers connect with you directly on Addtract to start conversations, request samples, and discuss next steps.'
        }
      ]
    }
  },
  methods: {
    hasTitle () {
      return this.title.length > 0
    }
  }
}
</script>
