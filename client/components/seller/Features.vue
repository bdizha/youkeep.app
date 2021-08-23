<template>
  <div class="r-mt-48 r-text-left">
    <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
            <h2 class="r-heading">
              Elevate your business experience
            </h2>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
            <p class="r-text-normal">
              Partner with us to introduce "Delayed Payments" service to your customers and multiply sales.
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col v-for="(feature, index) in features"
             :key="index"
             :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
      >
        <a-card class="r-card-secondary">
          <a-card-meta>
            <template slot="description">
              <r-circles align="top" theme="secondary"></r-circles>
              <r-circles align="bottom" theme="secondary"></r-circles>
              <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center"
                     type="flex"
              >
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <div class="r-icon r-icon-secondary">
                    <a-icon :type="feature.icon"/>
                  </div>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h4 class="r-heading-light  r-text-primary r-text-uppercase">
                    {{ feature.heading }}
                  </h4>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">
                    {{ feature.title }}
                  </h3>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-center">
                    {{ feature.content }}
                  </p>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-seller-features',
  props: {},
  data () {
    return {
      features: [
        {
          heading: 'Fast',
          title: 'Make Delayed Payments',
          content: 'Online or in-store, Addtract means more flexibility at checkout.',
          icon: 'credit-card'
        },
        {
          heading: 'Transparent',
          title: 'Earn zero risk payments',
          content: 'You get paid today. Your customers pay over time.',
          icon: 'safety'
        },
        {
          heading: 'Simple',
          title: 'Put your customers first',
          content: 'Interest-free installment plans with no hard credit check or impact on credit',
          icon: 'shop'
        },
        {
          heading: 'Inclusive',
          title: 'Process all major cards',
          content: 'Addtract is the only Delayed Payments solution that accepts Amex and Discover along with Visa.',
          icon: 'business-cart'
        },
        {
          heading: 'Robust',
          title: 'Get involved in our community',
          content: 'Introduce your brand to millions of existing Addtract customers in our marketplace.',
          icon: 'bank'
        },
        {
          heading: 'Reliable',
          title: 'Track & analyse every transaction',
          content: 'Easily manage customer data, order management, and reconciliation in the seller portal.',
          icon: 'calculator'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
