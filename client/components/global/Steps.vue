<template>
  <a-row type="flex" justify="center" class="r-margin-vertical-24">
    <a-col class="r-padding-24 gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 18 }">
      <a-row :gutter="[24,24]" type="flex" justify="center">
        <a-col class="gutter-row" :xs="{ span: 20 }" :sm="{ span: 20 }" :lg="{ span: 20 }">
          <h2 class="r-heading r-same-height">
            {{ title ? title : 'How it works?' }}
          </h2>
        </a-col>
        <a-col class="gutter-row r-text-right" :xs="{ span: 4 }" :sm="{ span: 4 }" :md="{ span: 4 }"
               :lg="{ span: 4 }">
          <router-link v-show="hasMore" to="/hiw">
            <a-button class="r-hide-sm r-btn-bordered-primary"
                      block
                      type="secondary"
                      :size="'default'">
              <a-icon type="right"/>
              Read more
            </a-button>
            <a-avatar class="r-hide-lg" shape="square" icon="right"/>
          </router-link>
        </a-col>
      </a-row>
      <a-row class="r-steps" :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-padding-vertical-48" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-card v-for="(step, index) in [1,2,3,4]"
                  v-show="index === currentStep"
                  :key="index"
                  :bordered='false'>
            <div slot="cover">
              <r-avatar shape="square"
                        size="450"
                        :src="'/assets/Step_' + step + '.svg'"
                        src-placeholder="/assets/icon_default.png"/>
            </div>
          </a-card>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-steps v-model="currentStep" direction="vertical" :current="currentStep">
            <a-step v-for="(step, index) in steps"
                    :key="index">
              <template slot="title">
                <h3 class="r-text-primary">{{ step.title }}</h3>
              </template>
              <template slot="description">
                {{ step.description }}
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
          title: 'You order',
          description: 'Shop better at your favorite stores from everywhere, anytime.'
        },
        {
          title: 'We shop',
          description: 'It\'s shopping time! We handle the rest of your shopping.'
        },
        {
          title: 'We deliver',
          description: 'Get your shopping in as little as\n' +
            '                                an hour, or when you want them.'
        },
        {
          title: 'You enjoy',
          description: 'Sit back and wait for your delivery.'
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
