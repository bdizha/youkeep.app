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
          heading: 'Showcase your products',
          image: '/steps/step-01-secondary.svg',
          summary: 'Share your brand profile with buyers on and off of Addtract and track engagement.',
          content: 'Your brand profile is a customizable digital sell sheet that highlights key service, brand, and company details all in a single place. <br /><br />Lead customers through the shopping journey with compelling tools like prequalification and dynamic price messaging, accelerating their path to purchase and encouraging bundling and upgrades. '
        },
        {
          title: 'Sell It',
          heading: 'Boost visibility with buyers',
          image: '/steps/step-02-secondary.svg',
          summary: 'Businesses use Addtract to discover new products and manage their inbound submissions. ',
          content: 'Your categories are placed in front of relevant buyers in your category. Gain up to 7x more buyer visibility and the traction that follows. <br /><br /> Amplify the power of Adaptive Checkout by tailoring terms and promotions-giving customers more reasons to say “yes” and helping you maximize checkouts.'
        },
        {
          title: 'Get Paid',
          heading: 'Connect and do business',
          image: '/steps/step-03-secondary.svg',
          summary: 'Buyers connect with you directly on Addtract to start conversations, request samples, and discuss next steps.',
          content: 'See what service details are driving buyer engagement, such as MSRP, margin, certifications, and popular search terms. <br /><br />Open up your business to an influx of new customers when you tap into our high lifetime value, highly engaged network of 6.2M+ customers and incorporate pay-over-time messaging in your marketing. '
        }
      ]
    }
  },
  methods: {}
}
</script>
