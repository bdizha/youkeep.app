<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48, 48]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <div class="r-mv-96">
            <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
              <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase r-text-secondary">
                      For customers
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h1 class="r-heading">
                      It's shopping time!
                    </h1>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Order everything from clothes to household essentials for delivery to your door.
                    </p>
                    <p class="r-text-normal">
                      With online shopping platform, tens of thousands of product categories, and millions of products
                      in
                      front of you, it’s the all-in-one
                      marketplace you deserve.
                    </p>
                    <p class="r-text-normal">
                      Eliminate trips to the store, and save time! We can't wait for you to experience the #shopplelife!
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-button block
                              class="r-btn-secondary"
                              size="large"
                              to="/register"
                              type="secondary"
                              @click="onRegister"
                    >
                      Get started today!
                    </a-button>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </div>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card style="background: #fbf0c8 url(/images/content/5.svg) no-repeat; background-size: cover;"
          >
            <a-card-meta style="padding-bottom: 420px;">
              <template slot="description">
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-steps></r-steps>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
              <a-card>
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col class="r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 12 }"
                      >
                        <r-avatar :size="90" class="r-avatar-auto" data-src="/images/content/frame-02.png"></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 12 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Get what your heart desires
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              Shop your go-to products from your favorite stores. We deliver from local
                              and
                              global retailers you love - like Adidas and more.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col class="r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/content/frame-01.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Get realtime order updates
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Want to add something to your order? We think we're flexible enough to get it delivered too in
                          the
                          shortest time possible.
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col class="r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/content/frame-05.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Get deliveries to your doorstep
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Brand new fashion items, household stuff, and more. Our shoppers help you get everything you
                          need.
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col class="r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :size="90" class="r-avatar-auto" data-src="/images/content/frame-06.png"></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          We take in order instructions
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <p class="r-text-normal">
                          Our super efficient customer experience team of shopping assistants is always ready
                          to take your enquiry - 24/7, 365 days a year.
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <h2 class="r-heading">
                Think you know shopping <span class="r-text-secondary">experience</span>?
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <p class="r-text-normal">
                Hello! Spazamall is an app that provides shopping delivery from your local store via a local community
                of reliable shoppers. Become a member, order from your phone or computer, and we'll bring your order
                straight to the location requested.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-48">
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Give it a go again!
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-normal">
                        Spazamall is committed to providing you with exceptional service, efficient and speedy
                        deliveries,
                        and Spazamall Shoppers you can trust.
                        Anything you want to shop - it’s on the way.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button block class="r-btn-secondary"
                                size="large"
                                type="secondary"
                                @click="onRegister"
                      >
                        Get started
                      </a-button>
                    </a-col>
                  </a-row>
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-customer',
  data () {
    return {
      images: [
        'art-06.png',
      ],
      postCode: null,
      formPostCode: this.$form.createForm(this, { name: 'form_post_code' }),
      requirements: [
        '18 years of age minimum',
        'Reliable vehicle, 15 years old or newer',
        'iPhone (iOS 8 or newer) or Android (5.4.2 or newer)',
        'Valid RSA driver\'s license and auto insurance',
        'Thorough background check required',
        'Insulated cooler bag',
        'Knowledge of product selection',
        'Ability to lift 24+ pounds'
      ]
    }
  },
  created () {
  },
  methods: {
    onRegister () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
