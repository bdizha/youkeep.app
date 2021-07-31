<template>
  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-steps :steps="steps" :size="size" theme="secondary"></r-steps>
    </a-col>
  </a-row>
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
