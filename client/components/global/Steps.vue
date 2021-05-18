<template>
  <a-row class="r-mt-48" type="flex" justify="center" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[24,24]" type="flex" justify="center"
             align="top">
        <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 20 }" :lg="{ span: 20 }">
          <h3 class="r-heading-light r-text-left">
            {{ title ? title : 'Shopple connects shoppers to sellers.' }}
          </h3>
        </a-col>
        <a-col v-show="hasMore" class="r-text-right" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 4 }"
               :lg="{ span: 4}">
          <nuxt-link to="/hiw">
            <a-button class="r-btn--grey"
                      block
                      type="secondary"
                      size="default">
              Explore More
              <a-icon type="right"/>
            </a-button>
          </nuxt-link>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
          <a-steps v-model="currentStep" direction="horizontal" :current="currentStep">
            <a-step v-for="(step, index) in steps"
                    :key="index">
              <template slot="title">
                <h3 class="r-heading-light">{{ step.title }}</h3>
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
