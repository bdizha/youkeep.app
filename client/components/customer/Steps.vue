<template>
  <r-steps user-type="customer" :has-more="hasMore" :size="size" :steps="steps" theme="secondary"
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
      title: 'Addtract connects buyers to the marketplace.',
      content: 'Our checkout and payment tools handle all your order placement, collection and delivery experience as well as returns for you at\n' +
        'a very low cost.',
      steps: [
        {
          title: 'Discover It',
          heading: 'Buying with Addtract is easy.',
          image: '/steps/step-01-secondary.svg',
          summary: 'Pick, compare, save products to your favourite list all in a single place.',
          content: 'Discover brands and products faster with a buyer homepage that highlights trends, collections, and more in a single place. <br /><br />Buying with Addtract is easy. Filter brand and service discovery by location, certifications, distribution, and more.'
        },
        {
          title: 'Shop It',
          heading: 'Sourcing without the searching',
          image: '/steps/step-02-secondary.svg',
          summary: 'Add products to folders based on your interests to review later or share with your team.',
          content: 'Discover brands and products faster with a buyer homepage that highlights trends, collections, and more in a single place. <br /><br />Review curated brands and products in your category with trending collections like diversity and sustainability.'
        },
        {
          title: 'Confirm It',
          heading: 'Streamlined checkout process',
          image: '/steps/step-03-secondary.svg',
          summary: 'Enjoy flexible payment options with credit offering at your convenience. ',
          content: 'Get your items scheduled for a delivery to your location. Sit back and wait for your delivery to arrive fast, secure and easy. <br /><br />Select the payment schedule that works for you, then confirm your loan. We’ll never charge more than you see up front.'
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
