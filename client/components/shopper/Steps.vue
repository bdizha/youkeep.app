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
      title: 'Shop in the Fast Lane',
      content: 'We support 50+ of your favorite stores. Look for the Spazastop logo and start shopping!',
      steps: [
        {
          title: 'Always checkout in 3 seconds or less.',
          heading: '<span class="r-text-primary">Gain</span> sales & marketplace insights',
          image: '/assets/asset-04.svg',
          summary: 'Unlock new growth in new ways while defending farming efficiency.',
          content: 'Spazastop enables Shoppers to create a universal account and buy from dozens of retailers in a few seconds.'
        },
        {
          title: 'Place and track orders in real-time.',
          heading: '<span class="r-text-primary">Reach</span> an end-to-end marketplace',
          image: '/assets/asset-06.svg',
          summary: 'With Spazastop, users no longer need to pull out their credit card or enter long forms to complete online purchases.',
          content: 'Ultimately, we want to enable impulse mobile shopping by making the online checkout as simple and fast as the offline one, without requiring retailers to implement anything.'
        },
        {
          title: 'Never bother with checkout forms again.',
          heading: '<span class="r-text-primary">Pay</span> in 3 installments with Spazastop.',
          image: '/assets/asset-12.svg',
          summary: 'We know how difficult it can be to secure financing and free up working capital as a farming growing business. ',
          content: 'It eliminates the need for mobile shoppers to fill out lengthy and cumbersome checkout forms, empowering them to make purchases effortlessly.'
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
