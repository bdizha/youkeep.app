<template>
  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-steps user-type="shopper" :size="size" :steps="steps" :title="title" :content="content" theme="primary"
      ></r-steps>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shopper-steps',
  props: {
    size: { type: Number, required: false, default: 16 },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      currentStep: 0,
      title: 'Addtract connects shoppers to buyers.',
      content: 'We partner with manufactures and the nearest businesses to provide our buyers with fast\n' +
        'deliveries and better checkout and credit line services.',
      steps: [
        {
          title: 'Not just a marketplace',
          heading: 'Gain sales data insights',
          image: '/products/product-01.svg',
          summary: 'Unlock new growth in new ways while defending marketing efficiency.',
          content: 'Create an account and showcase or discover trending, streamlined, and relevant products on Addtract\'s B2B marketplace today. ' +
            'Expand your customer base with key placements on our high-traffic website.'
        },
        {
          title: 'Unified checkout experience',
          heading: 'Earn multi-channel success',
          image: '/products/product-07.svg',
          summary: 'Increase your online revenue through data-driven cross-channel strategies proven to work.',
          content: 'Boost awareness of your business and reach new audiences organically through our broad network of influencers. ' +
            'Amplify service launches and promotions when you’re included in Addtract emails to our active user base.'
        },
        {
          title: 'Flexible payments terms',
          heading: 'Request credit on checkout',
          image: '/products/product-10.svg',
          summary: 'We know how difficult it can be to secure financing and free up working capital as a growing business. ',
          content: 'Our B2B payment method presents your buyers with the perfect pay-over-time option for them-whether that’s split pay, ' +
            'installments, or both-with terms and rates you can customize per service and per price point to drive the results you’re looking for.'
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
