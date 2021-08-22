<template>
  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-steps user-type="seller" df:size="size" :steps="steps" :title="title" :content="content" theme="secondary"></r-steps>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-seller-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    hasMore: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      currentStep: 0,
      title: 'Spazamall connects suppliers to retailers.',
      content: 'Spazamall offers stores likes yours to sell products to our customers with the most convenient shopping tools on the market.',
      steps: [
        {
          title: 'List It',
          content: 'Create a Spazamall account and list your product catalog on the Spazamall marketplace today.'
        },
        {
          title: 'Sell It',
          content: 'Your item sells, you ship your item to the buyer. and money is deposited to your Spazamall account.'
        },
        {
          title: 'Get Paid',
          content: 'Use the money as you like - shop online, send it to friends, or transfer it to your bank account.'
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
