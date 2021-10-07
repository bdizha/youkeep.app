<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :steps="steps" theme="white"
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
      content: 'We support 50+ of your favorite stores. Look for the Spazastop logo and start shopping!',
      steps: [
        {
          title: 'Step 01',
          heading: '<span class="r-text-primary">Discover</span> chefs, restaurants...',
          image: '/assets/asset-19.svg',
          summary: 'All food makers are safety certified. Get the freedom to choose what you crave.',
          content: 'Spazastop enables you to quickly find what you love, pay and get to enjoy it in a few minutes.'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-primary">Pick</span> your favourite dishes',
          image: '/assets/asset-21.svg',
          summary: 'Reduce hassle and easily place and track orders in real-time, anytime, anywhere.',
          content: 'With Spazastop, users no longer need to pull out their credit card or enter long forms to complete online purchases.'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-primary">Enjoy</span> your delicious meal',
          image: '/assets/asset-27.svg',
          summary: 'Dishes arrive hot and fresh – meal tips tailored to you, just eat, enjoy and repeat!',
          content: 'Download our free app and get more choices, exclusive deals and the freedom to shop anywhere and pay how you prefer.'
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
