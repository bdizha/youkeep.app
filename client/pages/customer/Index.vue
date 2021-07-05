<template>
  <a-row :gutter="[96,96]" type="flex" justify="center" align="middle">
    <a-col style="background: #FFFFFF;" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-mv-48 r-ph-24">
        <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }"
          >
            <a-row :gutter="[24,24]" type="flex" justify="end" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }"
                     :lg="{ span: 15 }"
              >
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase r-text-secondary">
                      For customers
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h1 class="r-heading">
                      It's shopping time!
                    </h1>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
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
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-button class="r-btn-secondary"
                              block
                              type="secondary"
                              to="/register"
                              size="large"
                              @click="onModal"
                    >
                      Get started today!
                    </a-button>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
          <a-col
            :xs="{ span: 24 }" :sm="{ span: 24 }"
            :md="{ span: 12 }"
            :lg="{ span: 12 }"
          >
            <r-avatar class="r-avatar-auto" data-src="/images/content/hero-01.png" :size="450"
            ></r-avatar>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <r-steps></r-steps>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 8 }"
               :lg="{ span: 8 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                         :md="{ span: 10 }"
                         :lg="{ span: 8 }"
                  >
                    <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/18.png'" :size="90"
                    ></r-avatar>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Shop it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Get what your heart desires
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Shop your go-to products from your favorite stores. That’s why we deliver from local
                      and
                      global retailers you love - like Adidas and more.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 8 }"
               :lg="{ span: 8 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                         :md="{ span: 10 }"
                         :lg="{ span: 8 }"
                  >
                    <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/19.png'" :size="90"
                    ></r-avatar>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Track it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Get realtime order updates
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Want to add something to your order? We think we're flexible enough to get it delivered too in the
                      shortest time possible.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 8 }"
               :lg="{ span: 8 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                         :md="{ span: 10 }"
                         :lg="{ span: 8 }"
                  >
                    <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/20.png'" :size="90"
                    ></r-avatar>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Get it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Get deliveries to your doorstep
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Brand new fashion items, household stuff, and more. Our shoppers help you get everything you
                      need.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 8 }"
               :lg="{ span: 8 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 12 }" :sm="{ span: 12 }"
                         :md="{ span: 10 }"
                         :lg="{ span: 8 }"
                  >
                    <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/21.png'" :size="90"
                    ></r-avatar>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Love it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      We take in order your instructions
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"

                  >
                    <p class="r-text-normal">
                      Our super efficient customer experience team of shopping assistants is always ready
                      to take your enquiry - 24/7, 365 days a year.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[48,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <h2 class="r-heading">
                Think you know shopping <span class="r-text-secondary">experience</span>?
              </h2>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <p class="r-text-normal">
                Hello! Shopple is an app that provides shopping delivery from your local store via a local community of reliable shoppers. Become a member, order from your phone or computer, and we'll bring your order straight to the location requested.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-48">
                  <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="center">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Give it a go again!
                      </h4>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <p class="r-text-normal">
                        Shopple is committed to providing you with exceptional service, efficient and speedy
                        deliveries,
                        and Shopple Shoppers you can trust.
                        Anything you want to shop - it’s on the way.
                      </p>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-button block @click="onRegister"
                                size="large"
                                class="r-btn-secondary"
                                type="secondary"
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
