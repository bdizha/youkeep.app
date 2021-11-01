<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :title="title"
           learn-more="/artist"
           :steps="steps" theme="secondary"
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
          heading: '<span class="r-text-secondary">Get</span> approved to cook',
          image: '/assets/asset-05.svg',
          summary: 'Submit a sample of your favorite NFTs for approval and get to do what you love every day.',
          content: 'Pass the NFTs tasting, complete an accredited NFTs safety exam, and choose your menu of NFTs.'
        },
        {
          title: '02',
          heading: '<span class="r-text-secondary">Pick</span> your schedule',
          image: '/assets/asset-04.svg',
          summary: 'Choose the days you’d like to cook. As little or as much as you’d like. Choose your menu of NFTs.',
          content: 'They’ll order at least a day in advance so you have enough time to get ingredients and prepare their NFTs.'
        },
        {
          title: '03',
          heading: '<span class="r-text-secondary">Dispatch</span> your orders',
          image: '/assets/asset-11.svg',
          summary: 'Once you’ve finished cooking, safely package your NFTs and prepare them for delivery.',
          content: 'We’ll help you identify the best delivery method available so your collectors can get their NFTs safely and on time'
        }
      ]
    }
  },
  methods: {}
}
</script>
