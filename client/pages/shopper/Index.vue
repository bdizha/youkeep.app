<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-primary r-text-uppercase">
                          For shoppers
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading r-text-uppercase">
                          <span class="r-text-primary">More</span> flexible,<br>
                          <span class="r-text-primary">Less</span> intrusive.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Earn up to R55/hr or more shopping for Spazamall members.
                          Deliver things people love, from the stores they trust.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Earn up to R55/hr or more shopping for Spazamall members.
                          Deliver things people love, from the stores they trust.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button block
                                  class="r-btn-primary"
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
              </a-col>
              <a-col
                :lg="{ span: 12 }" :md="{ span: 12 }"
                :sm="{ span: 24 }"
                :xs="{ span: 24 }"
              >
                <r-avatar :size="450" class="r-avatar-auto" data-src="/shoppers/16_secondary.png"
                ></r-avatar>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-shopper-steps></r-shopper-steps>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <h4 class="r-heading-light r-text-secondary r-text-uppercase">
            Deliver the orders people need
          </h4>
        </a-col>
        <a-col :lg="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <h2 class="r-heading">
            It’s <span class="r-text-secondary">quick</span> and <span class="r-text-primary">easy</span> to earn
            <span class="r-text-secondary">anytime</span>, anywhere you go.
          </h2>
        </a-col>
        <a-col :lg="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <p class="r-text-medium">
            With Spazamall, you don’t have to worry about which store to go to or where your next ride will take you.
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
            <a-col v-for="(feature, index) in features"
                   :key="index"
                   :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[12,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 12 }"
                      >
                        <r-avatar :dataSrc="feature.image" :size="60" class="r-avatar-block"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,12]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              {{ feature.heading }}
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading">
                              {{ feature.title }}
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              {{ feature.content }}
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
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" class="r-text-center" justify="start" type="flex">
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-primary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Join us
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h3 class="r-heading">
                      <span class="r-text-secondary">Requirements</span> for shoppers:
                    </h3>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <p class="r-text-normal">
                      Spazamall is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                      hot food, household items and more.
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"

                  >
                    <p v-for="(item, index) in requirements"
                       :key="index"
                       class="r-checked-item"
                    >
                      <a-icon slot="prefix" class="r-checked-item-icon" type="check"/>
                      <span class="r-checked-item-text">
                        {{ item }}
                      </span>
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-button block class="r-btn-secondary"
                              size="large"
                              type="secondary"
                              @click="onRegister"
                    >
                      Apply Now
                    </a-button>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-24">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h3 class="r-heading-light r-text-primary r-text-uppercase">
                        Why shop with Spazamall?
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading r-text-white">
                        It’s <span class="r-text-primary">quick</span> and <span class="r-text-primary">easy</span> to
                        earn on your time in your car, anytime.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <h4 class="r-heading r-text-primary r-checked-item">
                                <a-icon class="r-checked-item-icon" type="check"/>
                                Earn with Every Order
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                Get paid the full amount for every order you deliver + keep 100% of your tips.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <h4 class="r-heading r-text-primary r-checked-item">
                                <a-icon class="r-checked-item-icon" type="check"/>
                                Be Your Own Boss
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                Drive as little or as much as you want, anytime you want, anywhere you go.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                          <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <h4 class="r-heading r-text-primary r-checked-item">
                                <a-icon class="r-checked-item-icon" type="check"/>
                                Local Pickup Location
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-medium r-text-white">
                                One pickup location with free, reserved parking. No tickets, no headaches.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button block class="r-btn-primary"
                                size="large"
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
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shopper',
  data () {
    return {
      images: [
        'art-05.png'
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
      ],
      features: [
        {
          heading: 'Shop',
          title: 'Set your shopping schedule',
          content: 'Work part time or full time - any time. Set your own hours for a completely flexible schedule. We only push order requests within our operating hours: 8am-9pm.',
          image: '/images/content/customer-01.svg'
        },
        {
          heading: 'Deliver',
          title: 'Get fast delivery requests',
          content: 'Shop your go-to products from your favorite stores. That’s why we deliver from local and global retailers you love - like Adidas, H & M and 1000 000s more.',
          image: '/images/content/customer-02.svg'
        },
        {
          heading: 'Get Paid',
          title: 'Earn more as you deliver',
          content: 'Experienced shoppers make an average of R45/hr. Your weekly earnings are automatically credited to your Spazamall account on your set payment day.',
          image: '/images/content/customer-03.svg'
        }
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
      modal.current = 'shopper'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
