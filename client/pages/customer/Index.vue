<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" justify="start" align="middle" type="flex">
                <a-col class="r-text-left" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">Shoppers</span>
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        <span class="r-text-primary">Shop</span> simple with Paise
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Shop your favourites or discover new brands that let you get the most out of shopping.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        With Paise, you no longer need to pull out your credit card or enter long forms to complete
                        online purchases.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
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
                  </a-row>
                </a-col>
                <a-col class="r-text-left" :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <r-slider :images="images"></r-slider>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <r-services theme="primary"></r-services>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-tabs active-key="shopper" theme="white"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-benefits></r-customer-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-benefits></r-customer-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us :has-more="true" title="Don't have a Paise account?" heading="Take shopping to the next level with Paise."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller',
  props: {},
  data () {
    return {
      images: [
        '/assets/asset-19.svg',
        '/assets/asset-20.svg',
        '/assets/asset-06.svg',
        '/assets/asset-17.svg',
        '/assets/asset-21.svg',
        '/assets/asset-22.svg'
      ]
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
  }
}
</script>
