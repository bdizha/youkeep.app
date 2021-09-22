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
    title: { type: String, required: false, default: '<span class="r-text-secondary">Sell</span> more with Paise' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'seller',
      currentStep: 0,
      steps: [
        {
          title: 'Install Paise\n',
          heading: '<span class="r-text-secondary">Improve</span> customer satisfaction',
          image: '/assets/asset-26.svg',
          summary: 'Get the Paise checkout button in a few minutes on your online marketplace.',
          content: 'Let your customers get what they want, when they want it, anytime, everywhere. And your business will earn long-term customer relationships.'
        },
        {
          title: 'Boost Conversion',
          heading: '<span class="r-text-secondary">Boost</span> visibility with shoppers',
          image: '/assets/asset-08.svg',
          summary: 'Shoppers use Paise to discover new products and checkout in seconds. ',
          content: 'Paise enables instant mobile shopping by making the online checkout as simple and fast as the offline one, without requiring retailers to implement anything.'
        },
        {
          title: 'Expand Revenue',
          heading: '<span class="r-text-secondary">Sell</span> and maximise revenue',
          image: '/assets/asset-11.svg',
          summary: 'Build online experiences that meet the expectations of your customers.',
          content: 'Meet potential customers at the point of discovery abd break out and reach new shoppers beyond the walls of your own marketplace.'
        }
      ]
    }
  },
  methods: {}
}
</script>
