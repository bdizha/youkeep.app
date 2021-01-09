<template>
  <a-row class="r-mt-48" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row type="flex" justify="center">
        <a-col :xs="{ span: 18}" :sm="{ span: 18 }" :lg="{ span: 21 }">
          <h2 class="r-heading r-same-height">
            {{ title ? title : 'How it works?' }}
          </h2>
        </a-col>
        <a-col class="r-text-right" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 3 }"
               :lg="{ span: 3}">
          <nuxt-link v-show="hasMore" to="/hiw">
            <a-button class="r-btn--grey"
                      block
                      type="secondary"
                      size="large">
              <span class="r-hide-sm">Read more</span>
              <span class="r-hide-lg">Go</span>
              <a-icon type="right"/>
            </a-button>
          </nuxt-link>
        </a-col>
      </a-row>
      <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
          <a-steps v-model="currentStep" direction="horizontal" :current="currentStep">
            <a-step v-for="(step, index) in steps"
                    :key="index">
              <template slot="title">
                <h3 class="r-heading">{{ step.title }}</h3>
              </template>
              <template slot="description">
                <div class="r-step-caption">
                  {{ step.description }}
                </div>
                <div class="r-animate r-step-avatar">
                  <r-avatar
                            :key="index" shape="square"
                            :size="210"
                            :src="'/assets/Step_' + (index + 1) + '.svg?v=1'"
                            src-placeholder="/assets/icon_default.png"/>
                </div>
              </template>
            </a-step>
          </a-steps>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-steps',
  props: {
    size: {type: Number, required: false, default: 24},
    hasMore: {type: Boolean, required: false, default: true},
    title: {type: String, required: false, default: null},
  },
  data() {
    return {
      currentStep: 0,
      steps: [
        {
          title: 'You order.',
          description: 'Shop better at your favorite stores around the world, anytime.'
        },
        {
          title: 'We shop.',
          description: 'It\'s shopping time! We handle all your shopping experience and more.'
        },
        {
          title: 'You enjoy.',
          description: 'Sit back and wait for your delivery to arrive at your doorstep.'
        },
      ]
    };
  },
  methods: {
    hasTitle() {
      return this.title.length > 0;
    }
  }
};
</script>
