<template>
  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col flex="60px">
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card :class="getBgClass()" class="r-text-center r-p-0 r-radius-circle">
              <div class="r-p-12">
                <a-icon :class="getAccentClass()"
                        :style="{ fontSize: '36px' }"
                        theme="filled"
                        :type="step.icons.left"
                ></a-icon>
              </div>
            </a-card>
          </a-col>
        </a-col>
        <a-col flex="1 1 0">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col>
              <a-card :class="getBgClass()" class="r-text-center r-p-0 r-radius-circle">
                <div class="r-p-12">
                  <a-icon :class="getAccentClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          :type="step.icons.top"
                  ></a-icon>
                </div>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <r-avatar :data-src="step.image"
                        :size="300"
                        class="r-avatar-block r-avatar-none"
              ></r-avatar>
            </a-col>
            <a-col>
              <a-card :class="getBgClass()" class="r-text-center r-p-0 r-radius-circle">
                <div class="r-p-12">
                  <a-icon :class="getAccentClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          :type="step.icons.right"
                  ></a-icon>
                </div>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col flex="60px">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-card :class="getBgClass()" class="r-text-center r-p-0 r-radius-circle">
                <div class="r-p-12">
                  <a-icon :class="getAccentClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          :type="step.icons.bottom"
                  ></a-icon>
                </div>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-saucer',
  props: {
    theme: { type: String, required: false, default: 'primary' },
    accent: { type: String, required: false, default: 'tertiary' },
    step: {
      type: Object,
      required: true,
      default: () => {
      }
    },
    size: { type: Number, required: false, default: 300 }
  },
  data () {
    return {}
  },
  created () {
  },
  methods: {
    getBgClass () {
      return `r-bg-${this.theme}-light`
    },
    getTextClass () {
      return `r-text-${this.theme}`
    },
    getAccentClass () {
      return `r-text-${this.accent}`
    }
  }
}
</script>
