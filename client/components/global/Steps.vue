<template>
  <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: size }" :md="{ span: size }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                   class="r-text-center"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                    {{ title }}
                  </h3>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="r-text-center"
                >
                  <p class="r-text-medium">
                    {{ content }}
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col v-for="(step, index) in steps"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                >
                  <a-card
                    :class="{'r-bg-secondary-light': index === currentStep, 'r-bg-white-light': index !== currentStep}"
                    @click="setCurrentStep(index)"
                  >
                    <a-row :gutter="[24,12]" align="top" justify="center" type="flex">
                      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <h3 class="r-heading r-step-heading"
                          :class="{'r-text-primary': index === currentStep, 'r-text-secondary': index !== currentStep}"
                        >
                          <span class="r-circle">{{ (index + 1) }}</span>{{ step.title }}
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <p class="r-text-medium">
                          {{ step.content }}
                        </p>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <r-avatar v-for="(step, index) in steps"
                        v-if="index === currentStep"
                        :key="index" :size="300" :src="'/images/content/step-0' + (index + 1) + '-secondary.svg'"
                        class="r-avatar-block"
                        shape="square"
                        src-placeholder="/assets/icon_default.png"
                        unit="px"
              />
            </a-col>
          </a-row>
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
    title: { type: String, required: false, default: null },
    content: { type: String, required: false, default: null },
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
    getThemeClass (theme, isToggled) {
      if (isToggled) {
        if (theme === 'primary') {
          theme = 'secondary'
        } else {
          theme = 'primary'
        }
      }

      return theme
    },
    setCurrentStep (currentStep) {
      this.currentStep = currentStep
    }
  }
}
</script>
