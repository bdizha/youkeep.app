<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :title="title"
           learn-more="/seller"
           :steps="steps" :theme="theme"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-seller-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    title: { type: String, required: false, default: '<span class="r-text-tertiary">Sell</span> more with Youkeep' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'tertiary',
      userType: 'seller',
      currentStep: 0,
      steps: [
        {
          title: '01\n',
          heading: '<span class="r-text-tertiary">Setup</span> your wallet',
          image: '/assets/asset-15.svg',
          summary: 'Start accepting offers, bids, orders today through Youkeep and grow your online sales instantly.',
          content: 'Once connected to your wallet collectors can discover and collect your assets through the Youkeep NFTs platform.',
          icons: {
            left: 'shop',
            top: 'thunderbolt',
            right: 'pay-circle',
            bottom: 'star'
          }
        },
        {
          title: '02',
          heading: '<span class="r-text-tertiary">Create</span> your collection',
          image: '/assets/asset-10.svg',
          summary: 'Boost conversion as collectors use Youkeep to discover new NFTs and place offers in seconds. ',
          content: 'Confirm orders on your tablet or point of sale integration, without having to implement anything and save time.',
          icons: {
            left: 'fire',
            top: 'crown',
            right: 'clock-circle',
            bottom: 'build'
          }
        },
        {
          title: '03',
          heading: '<span class="r-text-tertiary">Sell</span> your NFT assets',
          image: '/assets/asset-12.svg',
          summary: 'Expand revenue by creating crypto collectables that meet the expectations of your collectors.',
          content: 'Meet potential collectors and with Youkeep you always choose how you want to sell your NFTs, and we help you sell them!',
          icons: {
            left: 'dollar-circle',
            top: 'bank',
            right: 'trophy',
            bottom: 'golden'
          }
        }
      ]
    }
  },
  methods: {}
}
</script>
