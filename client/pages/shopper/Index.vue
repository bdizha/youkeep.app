<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
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
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase r-text-secondary">
                          For shoppers
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading r-text-uppercase">
                          <span class="r-text-primary">More</span> flexible,<br>
                          <span class="r-text-secondary">Less</span> intrusive.
                        </h1>
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
                                  class="r-btn-secondary"
                                  size="large"
                                  to="/register"
                                  type="secondary"
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
                :lg="{ span: 12 }" :md="{ span: 12 }"
                :sm="{ span: 24 }"
                :xs="{ span: 24 }"
              >
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <div class="r-p-48">
                        <r-avatar :size="450" class="r-avatar-block" data-src="/images/content/hero-01.png"
                        ></r-avatar>
                      </div>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-steps></r-steps>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :dataSrc="'/images/content/22.png'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Do it
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Set your schedule
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Work part time or full time - any time.
                      Set your own hours for a completely flexible schedule. We offer during operating hours: 8am-9pm.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :dataSrc="'/images/content/23.png'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Shop it
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Get shopping requests
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
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
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :dataSrc="'/images/content/24.png'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Deliver it
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Set new delivery record
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Get tips from other shoppers, attend launch parties, and get a free Spazamall membership and enjoy
                      many discounts at favourite stores.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                         :sm="{ span: 12 }"
                         :xs="{ span: 12 }"
                  >
                    <r-avatar :dataSrc="'/images/content/25.png'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Earn it
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Earn as you shop
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"

                  >
                    <p class="r-text-normal">
                      Experienced shoppers make an average of R45/hr.
                      * Paychecks are delivered every week on a set day.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-24">
                  <a-row :gutter="[24,24]" class="r-text-center" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Why partner with Spazamall?
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading">
                        Think you know shopping <span class="r-text-secondary">experience</span>?
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-normal">
                        Spazamall is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                        hot food,
                        household items and more.
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
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 12 }"
               :xs="{ span: 12 }"
        >
          <a-card>
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
                    <h2 class="r-heading">
                      Requirements for shoppers:
                    </h2>
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
      ]
    }
  },
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'shopper'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
