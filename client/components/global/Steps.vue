<template>
  <a-row type="flex" justify="center" class="r-mv-24">
    <a-col class="r-p-24 gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[24,24]" type="flex" justify="center">
        <a-col class="gutter-row" :xs="{ span: 20 }" :sm="{ span: 20 }" :lg="{ span: 20 }">
          <h2 class="r-heading r-same-height">
            {{ title ? title : 'How it works?' }}
          </h2>
        </a-col>
        <a-col class="gutter-row r-text-right" :xs="{ span: 4 }" :sm="{ span: 4 }" :md="{ span: 4 }"
               :lg="{ span: 4 }">
          <nuxt-link v-show="hasMore" to="/hiw">
            <a-button class="r-hide-sm r-btn-bordered-primary"
                      block
                      type="secondary"
                      :size="'default'">
              Read more
              <a-icon type="right"/>
            </a-button>
            <a-avatar class="r-hide-lg" shape="square" icon="right"/>
          </nuxt-link>
        </a-col>
      </a-row>
      <a-row :gutter="[48,24]" type="flex" justify="center" align="middle">
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
          <a-steps v-model="currentStep" direction="horizontal" :current="currentStep">
            <a-step v-for="(step, index) in steps"
                    :key="index">
              <template slot="title">
                <h3 class="r-text-primary">{{ step.title }}</h3>
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
          title: 'We deliver.',
          description: 'Get your shopping items delivered to your doorstep by our shoppers. '
        },
        {
          title: 'You enjoy.',
          description: 'Checkout fast with Kpaise. Sit back and wait for your delivery to arrive.'
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
