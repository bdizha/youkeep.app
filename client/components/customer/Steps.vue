<template>
  <r-steps :steps="steps" theme="secondary"></r-steps>
</template>
<script>
export default {
  name: 'r-customer-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    hasMore: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: null }
  },
  data () {
    return {
      currentStep: 0,
      steps: [
        {
          title: 'Find It',
          content: 'Shop better at your favorite stores around the world, anytime.'
        },
        {
          title: 'Shop It',
          content: 'It\'s shopping time! We handle all your shopping experience and more.'
        },
        {
          title: 'Get It',
          content: 'Sit back and wait for your delivery to arrive at your doorstep fast.'
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
