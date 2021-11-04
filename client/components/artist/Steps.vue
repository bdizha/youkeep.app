<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :title="title"
           learn-more="/artist"
           :steps="steps" :theme="theme"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-artist-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    title: { type: String, required: false, default: '<span class="r-text-secondary">Cook</span> more with Youkeep' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'artist',
      currentStep: 0,
      steps: [
        {
          title: '01\n',
          heading: '<span class="r-text-secondary">Get</span> started as an NFT artist',
          image: '/assets/asset-20.svg',
          summary: 'Submit a sample of your favorite NFTs for approval and get paid to do what you love every day.',
          content: 'Add your wallet, social links, a little background, profile content, and set a secondary sales fee (a.k.a <span class="r-text-primary">base price</span>).',
          icons: {
            left: 'profile',
            top: 'rocket',
            right: 'setting',
            bottom: 'safety-certificate'
          }
        },
        {
          title: '02',
          heading: '<span class="r-text-secondary">Showcase</span> your collections',
          image: '/assets/asset-22.svg',
          summary: 'Create and customize your NFTs with properties, stats, and unlockable content. ',
          content: 'We’ll help you unleash your dreams and offer you tools that enable you to meet the unique demands of our curios collectors.',
          icons: {
            left: 'fire',
            top: 'build',
            right: 'tags',
            bottom: 'interaction'
          }
        },
        {
          title: '03',
          heading: '<span class="r-text-secondary">Sell</span> your rare assets',
          image: '/assets/asset-24.svg',
          summary: 'Once you’ve finished creating, safely package your NFTs and prepare them for showcasing.',
          content: 'You choose how and when you want to sell your NFTs, and we help you sell them to enthusiastic and verified NFT collectors.',
          icons: {
            left: 'dollar-circle',
            top: 'bank',
            right: 'pie-chart',
            bottom: 'golden'
          }
        }
      ]
    }
  },
  methods: {}
}
</script>
