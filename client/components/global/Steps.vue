<template>
  <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
      <a-col v-for="(step, index) in steps"
             :key="index"
             :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 8}" class="r-text-center">
        <a-card class="r-bg-primary">
        <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <r-avatar
              :key="index"
              :size="210" :src="'/images/content/step-0' + (index + 1) + '-' + theme + '.png?v=1'"
              class="r-avatar-block"
              shape="square"
              src-placeholder="/assets/icon_default.png"
              unit="px"
            />
          </a-col>
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <h3 class="r-heading r-text-secondary">
              {{ step.title }}
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <h4 class="r-heading-light">
              {{ step.content }}
            </h4>
          </a-col>
        </a-row>
        </a-card>
      </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-steps',
  props: {
    size: { type: Number, required: false, default: 24 },
    theme: { type: String, required: false, default: 'primary' },
    title: { type: String, required: false, default: null },
    steps: { type: Array, required: true, default: () => { } }
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
    }
  }
}
</script>
