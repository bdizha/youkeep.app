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
      title: 'Spazaland connects shoppers to buyers.',
      content: 'We partner with manufactures and the nearest businesses to provide our buyers with fast\n' +
        'deliveries and better checkout and credit line services.',
      steps: [
        {
          title: 'Not just a marketplace',
          heading: '<span class="r-text-primary">Gain</span> sales & marketplace insights',
          image: '/assets/asset-09.svg',
          summary: 'Unlock new growth in new ways while defending farming efficiency.',
          content: 'Create an account and showcase or discover trending, streamlined, and relevant products on Spazaland\'s B2B marketplace today. ' +
            'Expand your customer base with key placements on our high-traffic website.'
        },
        {
          title: 'Unified farming experience',
          heading: '<span class="r-text-primary">Reach</span> an end-to-end marketplace',
          image: '/assets/asset-06.svg',
          summary: 'We are here for passionate producers so you can focus on product quality of your brand.',
          content: ' Finding buyers is always not easy as well as transportation. Every single farmer spends a lot of time approaching offline marketplaces as well as arrangement of payment & delivery day by day.'
        },
        {
          title: 'Flexible payments terms',
          heading: '<span class="r-text-primary">Access</span> farming credit lines',
          image: '/assets/asset-12.svg',
          summary: 'We know how difficult it can be to secure financing and free up working capital as a farming growing business. ',
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
