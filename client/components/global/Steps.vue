<template>
  <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :data-src="steps[0].image" :size="300"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <div class="r-mv-48">
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading-light r-text-uppercase">
                              <span>{{ steps[0].title }}</span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h3 class="r-heading">
                              <span :class="getTextClass()">{{ steps[0].heading }}</span>
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium" :class="getAccentClass()">
                              {{ steps[0].summary }}
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal" v-html="steps[0].content"></p>
                          </a-col>
                        </a-row>
                      </div>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="space-between" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <div class="r-mv-48">
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading-light r-text-uppercase">
                              <span>{{ steps[1].title }}</span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h3 class="r-heading">
                              <span :class="getTextClass()">{{ steps[1].heading }}</span>
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              {{ steps[1].summary }}
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal" v-html="steps[1].content"></p>
                          </a-col>
                        </a-row>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :data-src="steps[1].image" :size="300"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="space-between" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-avatar :data-src="steps[2].image" :size="300"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <div class="r-mv-48">
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading-light r-text-uppercase">
                              <span>{{ steps[2].title }}</span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h3 class="r-heading">
                              <span :class="getTextClass()">{{ steps[2].heading }}</span>
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              {{ steps[2].summary }}
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal" v-html="steps[2].content"></p>
                          </a-col>
                        </a-row>
                      </div>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
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
    getTextClass () {
      return 'r-text-' + this.theme
    },
    getAccentClass () {
      if (this.theme === 'secondary') {
        return 'r-text-primary'
      }
      return 'r-text-secondary'
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
