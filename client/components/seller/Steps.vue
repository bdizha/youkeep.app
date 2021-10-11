<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :title="title"
           learn-more="/seller"
           :steps="steps" theme="secondary"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-seller-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    title: { type: String, required: false, default: '<span class="r-text-secondary">Sell</span> more with Spazastop' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'seller',
      currentStep: 0,
      steps: [
        {
          title: 'Step 01\n',
          heading: '<span class="r-text-secondary">Setup</span> your store',
          image: '/assets/asset-25.svg',
          summary: 'Start accepting orders today through Spazastop and grow your online sales instantly.',
          content: 'Customers can order and pay online or through the Spazastop ordering App and enable on-demand food orders to come in.'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-secondary">Accept</span> incoming orders',
          image: '/assets/asset-12.svg',
          summary: 'Boost conversion as customers use Spazastop to discover new dishes and place orders in seconds. ',
          content: 'Confirm orders on your tablet or point of sale integration, without having to implement anything and save time.'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-secondary">Offer</span> delivery or pickup',
          image: '/assets/asset-20.svg',
          summary: 'Expand Revenue by building online experiences that meet the expectations of your customers.',
          content: 'Meet potential customers at the point of discovery and reach new customers beyond the walls of your own restaurant.'
        }
      ]
    }
  },
  methods: {}
}
</script>
