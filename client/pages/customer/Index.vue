<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card>
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
              </p><br/>
              <a-row type="flex" justify="start" align="middle">
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
        <a-card>
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <r-steps :has-more="true"></r-steps>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 9}" :lg="{ span: 9 }">
                      <div class="r-icon r-icon__secondary r-icon-stroke">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" viewBox="0 0 48 48">
                          <g fill="none" fill-rule="evenodd">
                            <path fill="#0069cd" fill-rule="nonzero"
                                  d="M4 42a4 4 0 0 1-4-4h4V10a4 4 0 0 1 4-4h13v36H4z"></path>
                            <path fill="#F50A2B" fill-rule="nonzero"
                                  d="M8 10h13v28H8V10zm20-8h16a4 4 0 0 1 4 4v36a4 4 0 0 1-4 4H28a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4zm-2 6v32h20V8H26z"></path>
                          </g>
                        </svg>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{ span: 15 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Shop it
                      </h4>
                      <h4 class="r-heading">
                        All the shopping you want, shop every with Shopple assistant
                      </h4>
                      <p class="r-text-normal">
                        Shop your go-to products from your favorite stores. That’s why we deliver from local and
                        global retailers you love – like Adidas, Amazon, or Takealot.
                      </p>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 9}" :lg="{ span: 9 }">
                      <div class="r-icon r-icon__secondary r-icon-stroke">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48"><title>
                          48-light-bg</title>
                          <path d="M38,8H10L.19,27a24,24,0,0,0,47.62,0Z" fill="#F50A2B"></path>
                          <path d="M10,24V39.48A3,3,0,0,0,11.29,42a22,22,0,0,0,25.42,0A3,3,0,0,0,38,39.48V24Z"
                                fill="#fff"></path>
                          <path
                            d="M24,0A24,24,0,0,0,.19,27H47.81A24,24,0,0,0,24,0ZM38,21H10V14a4,4,0,0,1,4-4H34a4,4,0,0,1,4,4Z"
                            fill="#0069cd"></path>
                        </svg>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{ span: 15 }">
                      <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                        Track it
                      </h4>
                      <h4 class="r-heading">
                        Get realtime updates with every step of your order path
                      </h4>
                      <p class="r-text-normal">
                        Want to add something to your order? We think we're flexible enough to get it delivered too.
                      </p>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 9}" :lg="{ span: 9 }">
                          <div class="r-icon r-icon__secondary r-icon-stroke">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80.159" viewBox="0 0 96 95.281">
                              <title>
                                corporate_card</title>
                              <path
                                d="M41.143,91.692h-.02a2.527,2.527,0,0,1-2.1-2.894q.011-.07.026-.139l4.4-20.711L29.826,61.3A11.981,11.981,0,0,1,25.4,43.5L56.354.83A47.547,47.547,0,0,0,37.892,94.11c.446.1.882.168,1.318.248Z"
                                transform="translate(0 0)" style="fill:#F50A2B"></path>
                              <path
                                d="M57.672,1.078c-.446-.1-.882-.168-1.318-.248L25.386,43.5a11.981,11.981,0,0,0,4.43,17.788l13.626,6.659L52.1,27.239,65.729,33.9a11.97,11.97,0,0,1,4.43,17.788L39.21,94.368A47.55,47.55,0,1,0,57.672,1.078Z"
                                transform="translate(0 0)" style="fill:#0069cd"></path>
                              <path
                                d="M65.441,33.75,52.123,27.239,39.062,88.65a2.527,2.527,0,0,0,1.932,3.006q.069.015.139.026h.03l29.016-40A12.011,12.011,0,0,0,72.1,41.727,12.328,12.328,0,0,0,65.441,33.75Z"
                                transform="translate(0 0)" style="fill:#fff"></path>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{ span: 15 }">
                          <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                            Love it
                          </h4>
                          <h4 class="r-heading">
                            We take in your order instructions sincerely
                          </h4>
                          <p class="r-text-normal">
                            Our super efficient customer experience team of shopping assistants is always ready
                            to take your enquiry – 24/7, 365 days a year.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
              <a-card>
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 9}" :lg="{ span: 9 }">
                        <div class="r-icon r-icon__secondary r-icon-stroke">
                          <svg class="Icon " width="70" height="74" viewBox="0 0 35 37"
                               xmlns="http://www.w3.org/2000/svg">
                            <defs>
                              <clipPath id="ShieldWithCheckmarkIconClipPath">
                                <path
                                  d="M13.5 1.273S19.8 5.866 27 5.866v10.105c0 14.699-11.7 20.21-13.5 20.21-1.8 0-13.5-5.511-13.5-20.21V5.866c7.2 0 13.5-4.593 13.5-4.593zm0 12a3.467 3.467 0 00-3.462 3.472v1.389h-.346a.693.693 0 00-.692.694v4.167c0 .767.62 1.389 1.385 1.389h6.23c.765 0 1.385-.622 1.385-1.39v-4.166a.693.693 0 00-.692-.694h-.346v-1.39a3.467 3.467 0 00-3.462-3.471zm0 1.389a2.08 2.08 0 012.077 2.083v1.389h-4.154v-1.39c0-1.15.93-2.082 2.077-2.082z"
                                  class="Icon__blendBackground" style="fill: #0069cd;"></path>
                              </clipPath>
                            </defs>
                            <path
                              d="M13.5 1.273S19.8 5.866 27 5.866v10.105c0 14.699-11.7 20.21-13.5 20.21-1.8 0-13.5-5.511-13.5-20.21V5.866c7.2 0 13.5-4.593 13.5-4.593zm0 12a3.467 3.467 0 00-3.462 3.472v1.389h-.346a.693.693 0 00-.692.694v4.167c0 .767.62 1.389 1.385 1.389h6.23c.765 0 1.385-.622 1.385-1.39v-4.166a.693.693 0 00-.692-.694h-.346v-1.39a3.467 3.467 0 00-3.462-3.471zm0 1.389a2.08 2.08 0 012.077 2.083v1.389h-4.154v-1.39c0-1.15.93-2.082 2.077-2.082z"
                              class="Icon__blendBackground" style="fill: #0069cd;"></path>
                            <path
                              d="M26 0a9 9 0 110 18 9 9 0 010-18zm3.94 4.73L24 10.78 22.43 9a.83.83 0 00-1.3 1L23 13.2a1 1 0 001.7 0c.3-.41 6-7.57 6-7.57.75-.8-.16-1.51-.76-.9z"
                              class="Icon__blendForeground" style="fill: #F50A2B;"></path>
                            <g clip-path="url(#ShieldWithCheckmarkIconClipPath)">
                              <path
                                d="M26 0a9 9 0 110 18 9 9 0 010-18zm3.94 4.73L24 10.78 22.43 9a.83.83 0 00-1.3 1L23 13.2a1 1 0 001.7 0c.3-.41 6-7.57 6-7.57.75-.8-.16-1.51-.76-.9z"
                                class="Icon__blendForeground" style="fill: #F50A2B"></path>
                            </g>
                          </svg>
                        </div>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{ span: 15 }">
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Get it
                        </h4>
                        <h4 class="r-heading">
                          Delivery to your doorstep.
                        </h4>
                        <p class="r-text-normal">
                          Fresh produce, milk, eggs, and more. Our shoppers help you get everything you need.
                        </p>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-row class="r-text-center" type="flex" justify="center">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Think you know shopping experience?
                    </h4>
                    <h2 class="r-heading">
                      Give it a go again.
                    </h2>
                    <p class="r-text-normal">
                      Shopple is committed to providing you with exceptional service, efficient and speedy
                      deliverie,
                      and Shopple Shoppers you can trust.
                      Anything you want to shop – it’s on the way.
                    </p>
                  </a-col>
                </a-row>
                <a-row class="r-mt-24" type="flex" justify="center" align="middle">
                  <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                         :lg="{ span: 12 }">
                    <a-button block @click="onRegister"
                              size="default"
                              class="r-btn-secondary"
                              type="secondary">
                      Get started
                    </a-button>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
        </a-row>
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
        'art-06.png',
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
