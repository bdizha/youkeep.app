<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary r-pull-h-24 r-border-none r-card-r-128">
            <div class="r-mv-48">
              <a-row :gutter="[96,48]" justify="start" type="flex">
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
                            Look <span class="r-text-secondary">no further</span>
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-uppercase">
                            <span class="r-text-secondary">Sell</span>
                            <span class="r-text-white">your</span><br>
                            <span class="r-text-secondary">products</span>
                            <span class="r-text-white">on</span><br>
                            <span class="r-text-secondary">every</span> store.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Sell through multiple marketplaces</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Seamless sales channel platform</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Grow your business from one place</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
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
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Shopple's merchat tools make high-quality selling tools
                            accessible to every customer-centric merchant around the world.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col style="z-index: 1000" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/products/product-03.svg" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
            <div class="r-cover-image-half" style="background-image:none; background-color: #FFFFFF"></div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
            <a-col :lg="{ span: 21 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading r-text-primary">
                Your free online store is just a few clicks away.
              </h2>
            </a-col>
            <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                Join hundreds of thousands of small businesses who trust Shopple E-commerce to sell online.
              </p>
            </a-col>
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 12 }"
                   :xs="{ span: 24 }"
            >
              <a-button class="r-btn-primary"
                        @click="onModal"
                        block
                        size="large"
                        type="blue"
              >
                Get started for free
              </a-button>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-merchant-actions></r-merchant-actions>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row :gutter="[96,48]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-row align="middle" justify="end" type="flex">
                        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <div class="r-shade-dark">
                                <h4 class="r-heading-light r-text-primary r-text-uppercase">
                                  Launch it
                                </h4>
                              </div>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h2 class="r-heading-light">
                                Use Shopple’s merchant tools and APIs to accept more orders.
                              </h2>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                Shopple gives you the insights and tools to align your customer’s experience with your business
                                imperatives - so everyone sells everywhere.
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <a-card class="r-bg-dark-light">
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <h4 class="r-heading-light r-text-secondary">
                                          Personalized discovery
                                        </h4>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          Discover new brands and products faster with a dozen of merchant API action calls, flexible filters to access
                                          product data and associated entities (like variants, order history, forecast), and more in a unified space of dependable merchant tools
                                          that expand as your business grows.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-card>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <a-card class="r-bg-dark-light">
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <h4 class="r-heading-light r-text-primary">
                                          Customer-centric tools
                                        </h4>
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
                                  </a-card>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <a-card class="r-bg-dark-light">
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <h4 class="r-heading-light r-text-secondary">
                                          Curated collections
                                        </h4>
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
                                  </a-card>
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
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <r-avatar data-src="/images/screens/api-action-calls.png" :size="300"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-white r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <r-avatar data-src="/products/product-01.svg" :size="300"
                                    class="r-avatar-block"
                          ></r-avatar>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <div class="r-mv-48">
                            <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <div class="r-shade-secondary">
                                  <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                                    Build It
                                  </h4>
                                </div>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 18 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h2 class="r-heading-light r-text-primary">
                                  Up-scale your sales and boost your market share
                                </h2>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-primary-light">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <h4 class="r-heading r-text-secondary">
                                            Extend your customer reach
                                          </h4>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal r-text-dark">
                                            Leverage our proven strategic, marketing, and creative expertise to fill the top of your sales funnel and acquire more customers.
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-secondary-light">
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <h4 class="r-heading r-text-primary">
                                          Forecast sales more intelligently
                                        </h4>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal r-text-dark">
                                          Deliver faster using our nationwide fulfillment network, and expand operations with ecommerce-tailored financing.
                                        </p>
                                      </a-col>
                                    </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-primary-light">
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <h4 class="r-heading r-text-secondary">
                                          Improve customer experience
                                        </h4>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal r-text-dark">
                                          Turn customers into lifetime fans by optimizing their shopping experience and providing top-notch customer service.
                                        </p>
                                      </a-col>
                                    </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                                         :sm="{ span: 12 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-button class="r-btn-dark"
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
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row class="r-text-center" :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Discover new products, start connecting.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 21 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Signing up with Shopple is simple and only takes a few minutes.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
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
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <div class="r-checked-item r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-text-medium">
                                Get Shopple
                              </span>
                            </div>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal">
                              Choose to be a Shopple today and start achieving your goals.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <div class="r-checked-item r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-text-medium">
                                 Set products
                                </span>
                            </div>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal">
                              Your catalog is showcased on our platform to relevant merchants.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-center r-text-yellow" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <div class="r-checked-item r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-text-medium">
                                 Get orders
                                </span>
                            </div>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal r-text-dark">
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
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-services></r-services>
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
