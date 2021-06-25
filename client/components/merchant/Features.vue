<template>
  <div class="r-mt-48 r-text-left">
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col class="r-text-center" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col class="r-text-center" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <h2 class="r-heading">
              Elevate your shopping experience
            </h2>
          </a-col>
          <a-col class="r-text-center" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <p class="r-text-normal">
              Partner with us to introduce "Delayed Payments" service to your customers and multiply sales.
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col v-for="(feature, index) in features"
             :key="index"
             :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 8 }" :lg="{ span: 8 }"
      >
        <a-card class="r-card-secondary">
          <a-card-meta>
            <template slot="description">
              <r-circles theme="secondary" align="top"></r-circles>
              <r-circles theme="secondary" align="bottom"></r-circles>
              <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="center"
                     align="middle"
              >
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}">
                  <div class="r-icon r-icon-secondary">
                    <a-icon :type="feature.icon"/>
                  </div>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}">
                  <h4 class="r-heading-light  r-text-secondary r-text-uppercase">
                    {{ feature.heading }}
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}">
                  <h3 class="r-heading">
                    {{ feature.title }}
                  </h3>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}">
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
  name: 'r-merchant-features',
  props: {},
  data () {
    return {
      features: [
        {
          heading: 'Fast',
          title: 'Make Delayed Payments',
          content: 'Online or in-store, Shopple means more flexibility at checkout.',
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
          content: 'Shopple is the only Delayed Payments solution that accepts Amex and Discover along with Visa.',
          icon: 'shopping-cart'
        },
        {
          heading: 'Robust',
          title: 'Get involved in our community',
          content: 'Introduce your brand to millions of existing Shopple customers in our marketplace.',
          icon: 'bank'
        },
        {
          heading: 'Reliable',
          title: 'Track & analyse every transaction',
          content: 'Easily manage customer data, order management, and reconciliation in the merchant portal.',
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
