<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
        <div class="r-mv-96">
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
                      <h4 class="r-heading-light r-text-uppercase">
                        For <span class="r-text-primary">food</span> enthusiasts
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h1 class="r-heading r-text-dark">
                        <span class="r-text-primary">Order</span> food with Spazastop
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Get FREE delivery on your first app order.
                        Order your favourites or discover new dishes that you love to taste.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        With over 2500 restaurants on the app we've got whatever you feel like.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <r-button action="register" title="Get started"></r-button>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-left" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-welcome></r-customer-welcome>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-steps active-key="shopper" theme="white"></r-customer-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <r-services theme="primary"></r-services>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-benefits></r-customer-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-featured></r-seller-featured>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us :has-more="true" title="Don't have a Spazastop account?" heading="Take food deliveries to the next level with Spazastop."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import RCustomerWelcome from '../../components/customer/Welcome'

export default {
  name: 'r-seller',
  components: { RCustomerWelcome },
  props: {},
  data () {
    return {
      images: [
        '/assets/asset-03.svg'
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
