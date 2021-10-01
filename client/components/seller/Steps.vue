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
          title: 'Step 01\n',
          heading: '<span class="r-text-secondary">Improve</span> customer satisfaction',
          image: '/assets/asset-26.svg',
          summary: 'Install checkout button in a few minutes on your online marketplace.',
          content: 'Let your customers get what they want, when they want it, anytime, everywhere. And your business will earn long-term customer relationships.'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-secondary">Boost</span> visibility with shoppers',
          image: '/assets/asset-08.svg',
          summary: 'Boost Conversion as shoppers use Paise to discover new products and checkout in seconds. ',
          content: 'Paise enables instant mobile shopping by making the online checkout as simple and fast as the offline one, without requiring retailers to implement anything.'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-secondary">Sell</span> and maximise revenue',
          image: '/assets/asset-11.svg',
          summary: 'Expand Revenue by building online experiences that meet the expectations of your customers.',
          content: 'Meet potential customers at the point of discovery abd break out and reach new shoppers beyond the walls of your own marketplace.'
        }
      ]
    }
  },
  methods: {}
}
</script>
