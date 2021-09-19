<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :steps="steps" theme="primary"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-customer-steps',
  props: {
    size: { type: Number, required: false, default: 16 },
    hasMore: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      currentStep: 0,
      title: 'Shop in the Fast Lane',
      content: 'We support 50+ of your favorite stores. Look for the Paise logo and start shopping!',
      steps: [
        {
          title: 'Save time',
          heading: '<span class="r-text-primary">One</span> click checkout in 3 seconds',
          image: '/assets/asset-13.svg',
          summary: 'Complete online purchases from any device in seconds.',
          content: 'Paise enables Shoppers to create a universal account and buy from dozens of retailers in a few seconds.'
        },
        {
          title: 'Reduce hassle',
          heading: '<span class="r-text-primary">Choose</span> to checkout with Paise',
          image: '/assets/asset-14.svg',
          summary: 'Easily place and track orders in real-time, anytime.',
          content: 'With Paise, users no longer need to pull out their credit card or enter long forms to complete online purchases.'
        },
        {
          title: 'Stay secure',
          heading: '<span class="r-text-primary">Avoid</span> filling out checkout forms',
          image: '/assets/asset-12.svg',
          summary: 'Save your information in a wallet with bank-level security',
          content: 'It eliminates the need for mobile shoppers to fill out cumbersome checkout forms, empowering them to make purchases effortlessly.'
        }
      ]
    }
  },
  methods: {
    hasTitle () {
      return this.title.length > 0
    }
  }
}
</script>
