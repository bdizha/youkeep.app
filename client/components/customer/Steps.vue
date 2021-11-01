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
      content: 'We support 50+ of your favorite stores. Look for the Youkeep logo and start shopping!',
      steps: [
        {
          title: '01',
          heading: '<span class="r-text-primary">Discover</span> artists, marketplaces...',
          image: '/assets/asset-13.svg',
          summary: 'All NFTs makers are safety certified. Get the freedom to choose what meets your intentions.',
          content: 'Youkeep enables you to quickly find what you love, pay and get to enjoy it in a few minutes.'
        },
        {
          title: '02',
          heading: '<span class="r-text-primary">Pick</span> your favourite NFTs',
          image: '/assets/asset-06.svg',
          summary: 'Reduce hassle and easily place and track orders in real-time, anytime, anywhere.',
          content: 'With Youkeep, users no longer need to pull out their credit card or enter long forms to complete online purchases.'
        },
        {
          title: '03',
          heading: '<span class="r-text-primary">Enjoy</span> rare and authentic NFTs',
          image: '/assets/asset-10.svg',
          summary: 'Dishes arrive hot and fresh – NFT tips tailored to you, just eat, enjoy and repeat!',
          content: 'Download our free app and get more choices, exclusive liquidity and the freedom to shop anywhere and pay how you prefer.'
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
