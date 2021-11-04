<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :steps="steps" :theme="theme"
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
      theme: 'primary',
      currentStep: 0,
      title: 'Shop in the Fast Lane',
      content: 'We support 50+ of your favorite stores. Look for the Youkeep logo and start shopping!',
      steps: [
        {
          title: '01',
          heading: '<span class="r-text-primary">Discover</span> unique NFT assets',
          image: '/assets/asset-07.svg',
          summary: 'All NFTs makers are safety certified. Get the freedom to choose what meets your curiosity.',
          content: 'Once you’ve set up your wallet of choice, connect it to Youkeep by clicking the wallet icon in the top right corner.',
          icons: {
            left: 'eye',
            top: 'heart',
            right: 'notification',
            bottom: 'pushpin'
          }
        },
        {
          title: '02',
          heading: '<span class="r-text-primary">Pick</span> your favourite NFTs',
          image: '/assets/asset-13.svg',
          summary: 'Reduce hassle and easily collect, keep, and sell digital assets in real-time, anytime, anywhere.',
          content: 'With Youkeep, users no longer need to pull out their credit card or enter long forms to complete online purchases.',
          icons: {
            left: 'bug',
            top: 'compass',
            right: 'pie-chart',
            bottom: 'clock-circle'
          }
        },
        {
          title: '03',
          heading: '<span class="r-text-primary">Enjoy</span> high asset yields',
          image: '/assets/asset-11.svg',
          summary: 'Make offers for the assets you like and leverage free financial advice tailored to you you can access anytime!',
          content: 'Download our free app and get more choices, exclusive liquidity and the freedom to trade NFTs anywhere however you like.',
          icons: {
            left: 'sketch-circle',
            top: 'rocket',
            right: 'gift',
            bottom: 'bulb'
          }
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
