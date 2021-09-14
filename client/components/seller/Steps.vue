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
          title: 'List It',
          heading: '<span class="r-text-secondary">Showcase</span> your products',
          image: '/assets/asset-13.svg',
          summary: 'Share your farm profile with buyers on and off of Spazaland and track engagement.',
          content: 'Your farm profile is a customizable digital sell sheet that highlights key service, brand, and company details all in a single place. <br /><br />Lead customers through the shopping journey with compelling tools like pre-qualification and dynamic price messaging, accelerating their path to purchase and encouraging bundling and upgrades. '
        },
        {
          title: 'Sell It',
          heading: '<span class="r-text-secondary">Boost</span> visibility with buyers',
          image: '/assets/asset-13.svg',
          summary: 'Businesses use Spazaland to discover new products and manage their inbound submissions. ',
          content: 'Your categories are placed in front of relevant buyers in your category. Gain up to 7x more buyer visibility and the traction that follows. <br /><br /> Amplify the power of Adaptive Checkout by tailoring terms and promotions-giving customers more reasons to say “yes” and helping you maximize checkouts.'
        },
        {
          title: 'Get Paid',
          heading: '<span class="r-text-secondary">Connect</span> and do business',
          image: '/assets/asset-09.svg',
          summary: 'Retailers connect with you directly on Spazaland to start conversations, request samples, and discuss next steps.',
          content: 'See what service details are driving buyer engagement, such as MSRP, margin, certifications, and popular search terms. <br /><br />Open up your business to an influx of new customers when you tap into our high lifetime value, highly engaged network of 6.2M+ customers and incorporate pay-over-time messaging in your marketing.'
        }
      ]
    }
  },
  methods: {}
}
</script>
