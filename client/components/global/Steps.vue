<template>
  <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col class="r-text-light" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col v-for="(step, index) in steps"
                       :key="index"
                >
                  <div :class="getTextClass(index)" class="r-text-step">
                    <h4 :class="`r-step-${theme}`" class="r-text-uppercase"
                        @click="setCurrentStep(index)"
                    >
                      {{ step.title }}
                    </h4>
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col v-for="(step, index) in steps"
                       v-if="isCurrent(index)"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h3 class="r-heading" v-html="step.heading"></h3>
                    </a-col>
                    <a-col v-if="step.summary" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-medium r-text-light">
                        {{ step.summary }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-normal r-text-light" v-html="step.content"></p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col>
                  <r-button title="Get started" size="large" action="register" :theme="theme"></r-button>
                </a-col>
                <a-col>
                  <r-link :route="learnMore" title="NFT insights" size="large" :theme="`bordered-${theme}`"></r-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <r-saucer v-for="(step, index) in steps"
                    v-show="isCurrent(index)"
                    :theme="theme"
                    :key="index"
                    :image="step.image" :size="300"
          ></r-saucer>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-steps',
  props: {
    size: { type: Number, required: false, default: 16 },
    theme: { type: String, required: false, default: 'secondary' },
    userType: { type: String, required: false, default: 'customer' },
    learnMore: { type: String, required: false, default: '/customer' },
    title: { type: String, required: false, default: '<span class="r-text-primary">Shop</span> simple with Youkeep' },
    content: { type: String, required: false, default: null },
    hasMore: { type: Boolean, required: false, default: true },
    steps: {
      type: Array,
      required: true,
      default: () => {
      }
    }
  },
  data () {
    return {
      currentStep: 0
    }
  },
  computed: {
    bgTheme () {
      let bgTheme = null
      if (this.theme === 'primary') {
        bgTheme = 'secondary'
      } else {
        bgTheme = 'primary'
      }
      return bgTheme
    }
  },
  methods: {
    getTextClass (index) {
      let textClass = null

      if (this.isCurrent(index)) {
        textClass = `r-step-active`
      }

      return textClass
    },
    getAccentClass () {
      if (this.theme === 'secondary') {
        return 'r-text-primary'
      }
      return 'r-text-secondary'
    },
    getBgClass () {
      return `r-bg-${this.theme}-light`
    },
    getBtnClass (isBordered) {
      const theme = isBordered ? 'bordered-' + this.theme : this.theme
      return `r-btn-${theme}`
    },
    setCurrentStep (currentStep) {
      this.currentStep = currentStep
    },
    isCurrent (index) {
      return index === this.currentStep
    }
  }
}
</script>
