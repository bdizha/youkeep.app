<template>
  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-steps :size="size" :steps="steps" :title="title" :content="content" theme="secondary"></r-steps>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-customer-steps',
  props: {
    size: { type: Number, required: false, default: 16 },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      currentStep: 0,
      title: 'Spazamall connects customers to sellers.',
      content: 'Our shoppers handle all your shopping and delivery experience for you at\n' +
        'a very low cost.',
      steps: [
        {
          title: 'Add products to your cart',
          content: 'Get fashion, gadgets & other items from our marketplace.'
        },
        {
          title: 'Set your pickup or delivery time',
          content: 'It\'s shopping time! We handle all your shopping experience and more.'
        },
        {
          title: 'Get your items delivered to you',
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
