<template>
  <r-page>
    <a-row type="flex" justify="center" align="middle">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Get paid to shop with Shopple.
              </h4>
              <h1 class="r-heading r-text-secondary">
                A better way to shopping.
              </h1>
              <a-row type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                       style="text-align: left;">
                  <p class="r-text-normal">
                    Earn up to R55/hr or more shopping for Shopple members.
                    Deliver things people love, from the stores they trust.
                  </p>
                  <a-button @click="onModal" type="secondary"
                            class="r-btn-secondary r-margin-top-24"
                            size="large"
                            html-type="button">
                    Apply now
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/shopper.jpg')">
                </div>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             class="r-p-48">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[48,48]" type="flex" justify="space-between">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <h2 class="r-heading">
                        Why partner with Shopple?
                      </h2>
                      <p class="r-text-normal">
                        Shopple is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                        hot food and
                        household essentials.
                      </p>
                      <p class="r-text-normal">
                        Shopple is about more than online shopping. Whether you're looking to pay bills or fund
                        dreams, Shopple will get you there.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <div class="r-icon">
                        <a-icon type="clock-circle"/>
                      </div>
                      <h4 class="r-heading">
                        Work on your schedule
                      </h4>
                      <p class="r-text-normal">
                        Work part time or full time – any time.<br>Set your own hours for a completely
                        flexible schedule.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <div class="r-icon">
                        <a-icon type="shopping-cart"/>
                      </div>
                      <h4 class="r-heading">
                        Choose your wheels
                      </h4>
                      <p class="r-text-normal">
                        Get tips from other shoppers, attend launch parties, and get a free Shopple
                        membership.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <div class="r-icon">
                        <a-icon type="credit-card"/>
                      </div>
                      <h4 class="r-heading">
                        Earn money as you shop
                      </h4>
                      <p class="r-text-normal">
                        Experienced shoppers make an average of R50/hr.<br>
                        * Paychecks are delivered every week.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <h4 class="r-heading">
                        Requirements:
                      </h4>
                      <p v-for="requirement in requirements" class="r-text-normal">
                        <a-checkbox :checked="true">
                          {{ requirement }}
                        </a-checkbox>
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-text-center" type="flex" justify="center" :gutter="24">
      <a-col class="gutter-row r-padding-48" :xs="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <a-row type="flex" justify="center">
                <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <h2 class="r-heading">
                    Want to start making money shopping with Shopple?
                  </h2>
                  <p class="r-text-normal">
                    Apply to be a Shopple Shopper today and start achieving your goals.
                  </p>
                </a-col>
              </a-row>
              <a-row type="flex" justify="center" align="middle">
                <a-col class="r-padding-bottom-48" :xs="{ span: 24 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onModal" size="large" type="secondary">
                    Become a shopper
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <r-shopper-modal></r-shopper-modal>
  </r-page>
</template>
<script>
export default {
  name: 'r-shopper',
  data() {
    return {
      postCode: null,
      formPostCode: this.$form.createForm(this, {name: 'form_post_code'}),
      requirements: [
        "18 years of age minimum",
        "Reliable vehicle, 15 years old or newer",
        "iPhone (iOS 8 or newer) or Android (5.4.2 or newer)",
        "Valid RSA driver's license and auto insurance",
        "Thorough background check required",
        "Insulated cooler bag",
        "Knowledge of product selection",
        "Ability to lift 24+ pounds"
      ]
    }
  },
  created() {
  },
  methods: {
    onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'shopper';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
