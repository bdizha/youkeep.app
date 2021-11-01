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
    title: { type: String, required: false, default: '<span class="r-text-secondary">Sell</span> more with Youkeep' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'seller',
      currentStep: 0,
      steps: [
        {
          title: '01\n',
          heading: '<span class="r-text-secondary">Setup</span> your wallet',
          image: '/assets/asset-06-secondary.svg',
          summary: 'Start accepting offers, bids, orders today through Youkeep and grow your online sales instantly.',
          content: 'Once connected to your wallet collectors can discover and collect your assets through the Youkeep NFTs platform.'
        },
        {
          title: '02',
          heading: '<span class="r-text-secondary">Create</span> your collection',
          image: '/assets/asset-10-secondary.svg',
          summary: 'Boost conversion as collectors use Youkeep to discover new NFTs and place offers in seconds. ',
          content: 'Confirm orders on your tablet or point of sale integration, without having to implement anything and save time.'
        },
        {
          title: '03',
          heading: '<span class="r-text-secondary">Sell</span> your NFT assets',
          image: '/assets/asset-04-secondary.svg',
          summary: 'Expand revenue by creating crypto collectables that meet the expectations of your collectors.',
          content: 'Meet potential collectors and with Youkeep you always choose how you want to sell your NFTs, and we help you sell them!'
        }
      ]
    }
  },
  methods: {}
}
</script>
