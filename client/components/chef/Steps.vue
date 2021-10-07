<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :title="title"
           learn-more="/chef"
           :steps="steps" theme="secondary"
  ></r-steps>
</template>
<script>
export default {
  name: 'r-chef-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    title: { type: String, required: false, default: '<span class="r-text-secondary">Cook</span> more with Spazastop' },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      theme: 'secondary',
      userType: 'chef',
      currentStep: 0,
      steps: [
        {
          title: 'Step 01\n',
          heading: '<span class="r-text-secondary">Get</span> approved to cook',
          image: '/assets/asset-26.svg',
          summary: 'Sign up and submit a sample of your favorite dishes for approval.',
          content: 'Pass the food tasting, complete an accredited food safety exam, and choose your menu of dishes.'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-secondary">Pick</span> your schedule',
          image: '/assets/asset-08.svg',
          summary: 'Choose the days you’d like to cook. As little or as much as you’d like.',
          content: 'They’ll order at least a day in advance so you have enough time to get ingredients and prepare their dishes.'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-secondary">Prepare</span> your orders',
          image: '/assets/asset-11.svg',
          summary: 'Once you’ve finished cooking, safely package your dishes and prepare them for delivery.',
          content: 'We’ll help you identify the best delivery method available so your customers can get their food safely and on time'
        }
      ]
    }
  },
  methods: {}
}
</script>
