<template>
  <a-card class="r-bg-primary r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: size }" :md="{ span: size }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col :lg="{ span: hasMore ? 18: 24 }" :md="{ span: hasMore ? 18: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                       :class="{'r-text-center': hasMore}"
                >
                  <div class="r-mv-48">
                    <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                      <a-col :lg="{ span: hasMore ? 12 : 8 }" :md="{ span: hasMore ? 12 : 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-yellow r-text-uppercase">
                          {{ title }}
                        </h3>
                      </a-col>
                      <a-col v-if="hasMore" :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium r-text-white">
                          Built for retail shops, it offers a clear view into product purchase activity with automated billing, expensing, and reporting.
                        </p>
                      </a-col>
                      <a-col v-if="!hasMore" :lg="{ span: 4 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                      >
                        <nuxt-link to="/customer/membership">
                          <a-button block
                                    class="r-btn-secondary"
                                    size="large"
                                    type="secondary"
                          >
                            Discover More
                          </a-button>
                        </nuxt-link>
                      </a-col>
                    </a-row>
                  </div>
                </a-col>
                <a-col :lg="{ span: hasMore ? 12 : 24 }" :md="{ span: hasMore ? 12 : 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col v-for="(step, index) in steps"
                           :key="index"
                           :lg="{ span: hasMore ? 24 : 8 }" :md="{ span: hasMore ? 24 : 8 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-card :class="getBgClass(index)"
                              @click="setCurrentStep(index)"
                      >
                        <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
                          <a-col :lg="{ span: hasMore ? 24 : 12 }" :md="{ span: hasMore ? 24 : 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[12,12]" align="top" justify="center" type="flex">
                              <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                <h3 class="r-heading r-step-heading"
                                    :class="{'r-text-dark': index === currentStep, 'r-text-yellow': index !== currentStep}"
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
                          </a-col>
                          <a-col :class="{ 'r-hide-lg': hasMore }"
                                 v-if="(index === currentStep || !hasMore)"
                                 :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <r-avatar :size="240"
                                      :data-src="'/images/content/step-' + userType + '-0' + (index + 1) + '-' + theme + '.png'"
                                      class="r-avatar-block"
                                      shape="square"
                                      src-placeholder="/assets/icon_default.png"
                                      unit="px"
                            />
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-hide-sm" v-if="hasMore" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-avatar v-for="(step, index) in steps"
                            v-if="index === currentStep"
                            :key="index"
                            :size="300"
                            :data-src="'/images/content/step-' + userType + '-0' + (index + 1) + '-' + theme + '.png'"
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
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-steps',
  props: {
    size: { type: Number, required: false, default: 16 },
    theme: { type: String, required: false, default: 'secondary' },
    userType: { type: String, required: false, default: 'customer' },
    title: { type: String, required: false, default: null },
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
    getBgClass (index) {
      if (index === this.currentStep) {
        return 'r-bg-yellow'
      }
      return 'r-bg-dark'
    },
    setCurrentStep (currentStep) {
      this.currentStep = currentStep
    }
  }
}
</script>
