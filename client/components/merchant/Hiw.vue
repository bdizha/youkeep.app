<template>
  <a-row :gutter="[48,96]" type="flex" justify="start" align="middle">
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-merchant-steps></r-merchant-steps>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <h3 class="r-heading-light r-text-uppercase r-text-primary">
            Shopple for business
          </h3>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <h2 class="r-heading">
            Helping retailers move ahead
          </h2>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 15 }"
               :lg="{ span: 15 }"
        >
          <p class="r-text-normal">
            Whether it’s small online shops or retail brands, Shopple for Business gives you an easy
            way to
            manage your selling channel needs. Built for retail shops, it offers a clear view into
            product
            purchase activity with automated billing, expensing, and reporting.
          </p>
          <a-button class="r-btn-secondary"
                    type="primary"
                    to="/register"
                    size="large"
                    @click="onModal"
          >
            Create a free account
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-48">
                  <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <r-avatar class="r-avatar-block" :dataSrc="'/images/content/hero-01.png'" :size="300"
                      ></r-avatar>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 24 }"
                               :lg="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-primary r-text-uppercase">
                                Get paid
                              </h4>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <h2 class="r-heading">
                                Easily accept payments online
                              </h2>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                Get paid for what you sell on Shopple, on your own website, or in online
                                classifieds and forums.
                              </p>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                <a-icon type="check"></a-icon>
                                Setup is simple
                              </p>
                              <p class="r-text-normal">
                                <a-icon type="check"></a-icon>
                                Getting paid online is affordable - our rates are competitive
                              </p>
                              <p class="r-text-normal">
                                <a-icon type="check"></a-icon>
                                In minutes you’ll be up and running, able to accept payments
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-mt-48 r-ph-24">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 16 }"
                 :lg="{ span: 16 }"
          >
            <h3 class="r-heading-light r-text-uppercase r-text-primary">
              Sell online at Shopple
            </h3>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <h2 class="r-heading">
              Shopple is the best way to get paid for whatever you sell on its marketplace.
            </h2>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 16 }"
          >
            <p class="r-text-normal">
              That's because Shopple is seamlessly integrated into Shopple checkout and your money shows up
              in your Shopple account after your sale closes. Plus, Shopple offers a host of seller tools
              and resources to enhance your fun and profits.
            </p>
            <a-button class="r-btn-primary"
                      type="primary"
                      to="/register"
                      size="large"
                      @click="onModal"
            >
              Sign Up
            </a-button>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-48">
              <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase r-text-primary">
                        The Shopple Platform
                      </h3>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Get easy access to powerful marketplace tools
                      </h2>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Forget about spending hours learning new software. The Shopple platform makes it
                        super simple to view your marketplaces, update information, or track your inventory in real
                        time.
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <p v-for="(feature, index) in features"
                         :key="index"
                         class="r-text-normal"
                      >
                        <a-icon class="r-text-primary" slot="prefix" type="check"/>
                        {{ feature.content }}
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <a-button class="r-btn-secondary"
                                type="primary"
                                to="/register"
                                size="large"
                                @click="onModal"
                      >
                        Manage your store
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <r-avatar class="r-avatar-block" :dataSrc="'/images/content/hero-02.png'" :size="300"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-48">
              <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <r-avatar class="r-avatar-block" :dataSrc="'/images/content/hero-01.png'" :size="300"
                  ></r-avatar>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase r-text-primary">
                        E-commerce specialists
                      </h3>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Get one-on-one support when you need it
                      </h2>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Shopple gives you a dedicated e-commerce expert supported by a team of knowledgeable
                        small
                        business
                        experts. We’re here to take the guesswork out of running your own business - for
                        good.
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <a-button class="r-btn-primary"
                                type="primary"
                                to="/register"
                                size="large"
                                @click="onModal"
                      >
                        Start saving today
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <h2 class="r-heading">
                Why thousands of retailers <span class="r-text-primary">choose</span> Shopple
              </h2>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <r-avatar class="r-avatar-secondary" :dataSrc="'/images/content/merchant-01.png'" shape="circle"
                                  :size="90"
                        ></r-avatar>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading">
                          Convenient payment options
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <p class="r-text-normal">
                          Accept all major credit cards - your customers don't even need a Shopple account.
                        </p>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <r-avatar class="r-avatar-secondary" :dataSrc="'/images/content/merchant-02.png'" shape="circle"
                                  :size="90"
                        ></r-avatar>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading">
                          Fast access to your money
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <p class="r-text-normal">
                          When an order is completed, the money usually shows up in your Shopple account in minutes.
                        </p>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <r-avatar class="r-avatar-secondary" :dataSrc="'/images/content/merchant-03.png'" shape="circle"
                                  :size="90"
                        ></r-avatar>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <h4 class="r-heading">
                          Fraud detection & reduction
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <p class="r-text-normal">
                          Automatic fraud screening and our Seller Protection Policy help keep you and your customers
                          safe.
                        </p>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-merchant-hiw',
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Shopple via mobile or desktop - we go where you go' },
        { content: 'Quickly answer categorization requests from your team' },
        { content: 'Contact your team with our simple messaging feature' },
        { content: 'Get operating support at any time within our work ours' }
      ]
    }
  },
  mounted () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
