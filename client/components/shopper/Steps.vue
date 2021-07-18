<template>
  <a-row align="top" class="r-mt-48" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-steps v-model="currentStep" :current="currentStep" direction="horizontal">
        <a-step v-for="(step, index) in steps"
                :key="index"
        >
          <template slot="description">
            <a-row :gutter="[24,24]" align="top" justify="center"
                   type="flex"
            >
              <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 8}" class="r-text-center">
                <a-row :gutter="[24,12]" align="top" justify="center"
                       type="flex"
                >
                  <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <div class="r-steps-item-icon">{{ index + 1 }}</div>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <div class="r-step-avatar">
                      <r-avatar
                        :key="index"
                        :size="72" :src="'/images/content/step-0' + (index + 1) + '.png?v=1'"
                        class="r-avatar-auto"
                        shape="square"
                        src-placeholder="/assets/icon_default.png"
                        unit="px"
                      />
                    </div>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 16 }" :xs="{ span: 16}">
                <a-row :gutter="[24,12]" align="top" justify="center"
                       type="flex"
                >
                  <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <h4 class="r-heading">{{ step.title }}</h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <p class="r-text-normal r-step-caption">
                      {{ step.description }}
                    </p>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </template>
        </a-step>
      </a-steps>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shopper-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    hasMore: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: null },
  },
  data () {
    return {
      currentStep: 0,
      steps: [
        {
          title: 'You setup.',
          description: 'Create a Shopple account and list your product catalog on the Shopple marketplace today.'
        },
        {
          title: 'You shop.',
          description: 'Your item sells, you ship your item to the buyer. and money is deposited to your Shopple account.'
        },
        {
          title: 'You deliver.',
          description: 'Use the money as you like - shop online, send it to friends, or transfer it to your bank account.'
        },
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
