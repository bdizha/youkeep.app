<template>
  <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-card class="r-bg-dark r-pull-h-24 r-border-none">
              <div class="r-mv-48">
                <a-row align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
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
                    </a-row>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-card class="r-bg-dark r-pull-h-24 r-border-none">
              <div class="r-mv-48">
                <a-row :gutter="[48,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
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
                            <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
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
                                          farm profile
                                        </h4>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          Build visibility with leading retailers and NFTs outlets by highlighting key
                                          brand
                                          information that shoppers look for.
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
                                        <p class="r-text-normal">
                                          Customize product pages to show shoppers essential product and company
                                          details
                                          like MSRP, price margins, packaging dimensions, and more.
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
                                        <p class="r-text-normal">
                                          Share your farm profile with shoppers on and off of AddTract and track
                                          engagement
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
        <a-card class="r-bg-dark r-pull-h-24 r-border-none">
          <div class="r-mv-48">
            <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="center" type="flex">
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
                      Signing up with Youkeep is simple and only takes a few minutes. Discover new products. Start
                      connecting.
                    </p>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" class="r-text-left" justify="center" type="flex">
                  <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                    <a-card class="r-bg-white">
                      <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
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
                            Choose to be a Youkeep Seller today and start achieving your goals.
                          </p>
                        </a-col>
                      </a-row>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                    <a-card class="r-bg-white">
                      <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
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
                            Your categories are showcased on our platform to relevant shoppers.
                          </p>
                        </a-col>
                      </a-row>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                    <a-card class="r-bg-white">
                      <a-row :gutter="[12,12]" class="r-text-left r-text-secondary" justify="center" type="flex">
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading r-text-primary">
                            <a-icon class="r-checked-item-icon" type="check"/>
                            <span class="r-checked-item-text">
                                Start accepting orders
                                </span>
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-medium">
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
</template>
<script>
export default {
  name: 'r-seller-temp',
  props: {},
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
