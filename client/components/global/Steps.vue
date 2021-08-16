<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col class="r-text-center" :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h3 class="r-heading-light">
            <span class="r-text-blue">The Graphigem Framework Model</span>
          </h3>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-medium">
            Accelerating business success:
          </p>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark">
        <a-collapse accordion
                    v-model="currentStep"
                    expandIconPosition="right"
        >
          <a-collapse-panel v-for="(step, index) in steps"
                            :key="(index).toString()"
                            :class="'r-collapse-panel-' + step.theme"
                            class="r-collapse-panel"
          >
            <template slot="header">
              <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <h4 class="r-heading" :class="getTextClass(step.theme)">
                    {{ index == currentStep ? step.heading : step.title }}
                  </h4>
                </a-col>
              </a-row>
            </template>
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <div :style="{'min-height': (index !== 0) ? '300px' : 'auto'}">
                  <a-row :gutter="[24,24]" justify="center" type="flex" align="middle">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium" :class="getTextClass(step.theme)">
                        {{ step.summary }}
                      </p>
                    </a-col>
                    <a-col v-if="step.content" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal" v-html="step.content"></p>
                    </a-col>
                  </a-row>
                </div>
              </a-col>
              <a-col :lg="{ span: (index !== 0) ? 12 : 24 }" :md="{ span: (index !== 0) ? 12 : 24 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     class="r-text-center"
              >
                <r-avatar :size="240"
                          :data-src="'/images/content/' + step.image + '.svg'"
                          class="r-avatar-auto"
                          shape="square"
                          src-placeholder="/assets/icon_default.png"
                          unit="px"
                />
              </a-col>
            </a-row>
          </a-collapse-panel>
        </a-collapse>
      </a-card>
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
  },
  methods: {
    getTextClass (theme) {
      return 'r-text-' + theme
    }
  }
}
</script>
