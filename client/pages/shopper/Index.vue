<template>
  <r-page>
    <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="start" align="middle">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Shopple for shoppers
              </h4>
              <h1 class="r-heading">
                <span class="r-text-secondary">More flexible,</span><br>
                <span class="r-text-primary">Less intrusive</span>
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
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
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
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 10 }">
                  <div class="r-icon">
                    <a-icon type="clock-circle"/>
                  </div>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }">
                  <h4 class="r-heading">
                    Work on your schedule
                  </h4>
                  <p class="r-text-normal">
                    Work part time or full time – any time.<br>Set your own hours for a completely
                    flexible schedule.
                  </p>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 10 }">
                  <div class="r-icon">
                    <a-icon type="shopping-cart"/>
                  </div>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }">
                  <h4 class="r-heading">
                    Choose your wheels
                  </h4>
                  <p class="r-text-normal">
                    Get tips from other shoppers, attend launch parties, and get a free Shopple
                    membership.
                  </p>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 10 }">
                  <div class="r-icon">
                    <a-icon type="credit-card"/>
                  </div>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 14 }"
                       style="text-align: left;">
                  <h4 class="r-heading">
                    Earn money as you shop
                  </h4>
                  <p class="r-text-normal">
                    Experienced shoppers make an average of R50/hr.<br>
                    * Paychecks are delivered every week.
                  </p>
                </a-col>
              </a-row>
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
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Requirements:
              </h2>
              <p v-for="requirement in requirements" class="r-text-normal">
                <a-icon type="check-circle" class="r-text-secondary"></a-icon>
                {{ requirement }}
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-card class="r-p-24 r-text-center">
          <a-card-meta>
            <template slot="description">
              <a-row type="flex" justify="center">
                <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <h2 class="r-heading">
                    Want to get paid to shop with Shopple?
                  </h2>
                  <p class="r-text-normal">
                    Apply to be a Shopple Shopper today and start achieving your goals.
                  </p>
                </a-col>
              </a-row>
              <a-row class="r-mt-24" type="flex" justify="center" align="middle">
                <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onModal"
                            size="large"
                            class="r-btn-secondary"
                            type="secondary">
                    Become a shopper
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  name: 'r-shopper',
  data() {
    return {
      images: [
        'shopper-01.jpg',
        'shopper-02.jpg',
        'shopper-03.jpg',
        'shopper-04.jpg',
      ],
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
