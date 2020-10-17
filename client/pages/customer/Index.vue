<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Shop better
              </h4>
              <h1 class="r-heading r-text-secondary">
                It's shopping time
              </h1>
              <p class="r-text-normal">
                Order everything from clothes to household essentials for delivery to your door.
              </p><br />
              <a-row type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }">
                  <r-delivery-form></r-delivery-form>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                    <span class="r-text-secondary">
                    Shop it
                    </span>
              </h4>
              <h3 class="r-heading">
                All the shopping you want, shop every with Shopple assistant
              </h3>
              <p class="r-text-normal">
                Shop your go-to products from your favorite stores. That’s why we deliver from local and
                global retailers you love – like Adidas, Amazon, or Takealot.
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
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                    <span class="r-text-secondary">
                    Track it
                    </span>
              </h4>
              <h3 class="r-heading">
                Get realtime updates with every step of your order path
              </h3>
              <p class="r-text-normal">
                Want to add something to your order? We think we're flexible enough to get it delivered too.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                    <span class="r-text-secondary">
                      Love it
                    </span>
              </h4>
              <h3 class="r-heading">
                We take in your order instructions sincerely
              </h3>
              <p class="r-text-normal">
                Our super efficient customer experience team of shopping assistants is always ready
                to take your enquiry – 24/7, 365 days a year.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;"> &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card class="r-p-24">
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                    <span class="r-text-secondary">
                    Get it
                    </span>
              </h4>
              <h3 class="r-heading">
                Delivery to your doorstep.
              </h3>
              <p class="r-text-normal">
                Fresh produce, milk, eggs, and more. Our shoppers help you get everything you need.
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
                    Think you know shopping experience? Give it a go again.
                  </h2>
                  <p class="r-text-normal">
                    Shopple is committed to providing you with exceptional service, efficient and speedy deliverie,
                    and Shopple Shoppers you can trust.
                    Anything you want to shop – it’s on the way.
                  </p>
                </a-col>
              </a-row>
              <a-row class="r-mt-24" type="flex" justify="center" align="middle">
                <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onRegister"
                            size="large"
                            class="r-btn-secondary"
                            type="secondary">
                    Get started
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
  name: 'r-customer',
  data() {
    return {
      images: [
        'customer-01.jpg',
        'customer-02.jpg',
        'customer-03.jpg',
        'customer-04.jpg',
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
    onRegister() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'register';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
