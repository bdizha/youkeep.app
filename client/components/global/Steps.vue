<template>
  <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col v-for="(step, index) in steps"
                           :key="index"
                    >
                      <h4 class="r-text-cursor"
                          @click="setCurrentStep(index)"
                          :class="{'r-active': isCurrent(index)}"
                      >
                        <span>{{ step.title }}</span>
                      </h4>
                    </a-col>
                  </a-row>
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
                      <p class="r-text-medium">
                        {{ step.summary }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-normal" v-html="step.content"></p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <a-button block
                            class="r-btn-secondary"
                            size="large"
                            type="secondary"
                  >
                    Get started
                  </a-button>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <nuxt-link :to="learnMore">
                    <a-button block
                              class="r-btn-bordered-secondary"
                              size="large"
                              type="secondary"
                    >
                      Learn more
                      <a-icon type="right"></a-icon>
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <r-avatar v-for="(step, index) in steps"
                    v-show="isCurrent(index)"
                    :key="index"
                    :data-src="step.image" :size="300"
                    class="r-avatar-block"
          ></r-avatar>
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
    learnMore: { type: String, required: false, default: '/consumer' },
    title: { type: String, required: false, default: '<span class="r-text-primary">Shop</span> simple with Paise' },
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
    getTextClass () {
      return 'r-text-' + this.theme
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
    setCurrentStep (currentStep) {
      this.currentStep = currentStep
    },
    isCurrent (index) {
      return index === this.currentStep
    }
  }
}
</script>
