<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :steps="steps" theme="secondary"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-seller-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'seller',
      currentStep: 0,
      steps: [
        {
          title: 'Adaptive checkout\n',
          heading: '<span class="r-text-secondary">Improve</span> customer satisfaction',
          image: '/assets/asset-11.svg',
          summary: 'Build online experiences that meet the expectations of your customers.',
          content: 'Let your shoppers get what they want, when they want it, anytime, everywhere. And your business will earn long-term customer relationships.'
        },
        {
          title: 'Boost Conversion',
          heading: '<span class="r-text-secondary">Boost</span> visibility with shoppers',
          image: '/assets/asset-14.svg',
          summary: 'Shoppers use Paise to discover new products and checkout in seconds. ',
          content: 'Paise enables instant mobile shopping by making the online checkout as simple and fast as the offline one, without requiring retailers to implement anything.'
        },
        {
          title: 'Maximize Revenue',
          heading: '<span class="r-text-secondary">Sell</span> and maximise revenue',
          image: '/assets/asset-12.svg',
          summary: 'Configure Paise checkout in a few minutes on your online marketplace.',
          content: 'Meet potential customers at the point of discovery abd break out and reach new shoppers beyond the walls of your own marketplace.'
        }
      ]
    }
  },
  methods: {}
}
</script>
