<template>
  <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading-light r-text-primary">
                    {{ title }}
                  </h2>
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
                              class="r-btn-dark"
                              size="large"
                              type="secondary"
                    >
                      Discover More
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :size="300"
                                :data-src="'/products/product-05.png'"
                                class="r-avatar-block"
                                shape="square"
                                src-placeholder="/assets/icon_default.png"
                                unit="px"
                      />
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            <span class="r-text-primary">{{ steps[0].title }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading">
                            <span class="r-text-dark">{{ steps[0].heading }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-medium r-text-dark">
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
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading-light r-text-uppercase">
                            <span class="r-text-primary">{{ steps[1].title }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading">
                            <span class="r-text-dark">{{ steps[1].heading }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-medium r-text-dark">
                            {{ steps[1].content }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :size="300"
                                :data-src="'/products/product-02.png'"
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
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :size="300"
                                :data-src="'/products/product-09.png'"
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
                          <h4 class="r-heading-light r-text-uppercase">
                            <span class="r-text-primary">{{ steps[2].title }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading">
                            <span class="r-text-dark">{{ steps[2].heading }}</span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-medium r-text-dark">
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
      userType: 'merchant',
      currentStep: 0,
      title: 'Shopple connects resellers to retailers.',
      content: 'Shopple offers stores likes yours to sell products to our customers with the most convenient business tools on the market.',
      steps: [
        {
          title: 'Get Shopple',
          heading: 'Showcase Your catalog',
          content: 'Your brand profile is a customizable digital sell sheet that highlights key product, brand, and company details all in a single place.'
        },
        {
          title: 'Set products',
          heading: 'Get discovered',
          content: 'Resellers use Shopple to discover new products and manage their inbound submissions. Your catalog are placed in front of relevant buyers in your category.'
        },
        {
          title: 'Get orders',
          heading: 'Connect and do business',
          content: 'Resellers connect with you directly on Shopple to start conversations, request samples, and discuss next steps.'
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
