<template>
  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col flex="84px">
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-card class="r-text-center r-p-0 r-bg-dark r-radius-circle">
              <div class="r-p-24">
                <a-icon :class="getTextClass()"
                        :style="{ fontSize: '36px' }"
                        theme="filled"
                        type="build"
                ></a-icon>
              </div>
            </a-card>
          </a-col>
        </a-col>
        <a-col flex="1 1 0">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col>
              <a-card class="r-text-center r-p-0 r-bg-dark r-radius-circle">
                <div class="r-p-24">
                  <a-icon :class="getTextClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          type="golden"
                  ></a-icon>
                </div>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-card :class="getBgClass()" class="r-p-0 r-bg-dark r-radius-circle">
                <div class="r-p-24">
                  <r-avatar :data-src="image"
                            :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </div>
              </a-card>
            </a-col>
            <a-col>
              <a-card class="r-text-center r-p-0 r-bg-dark r-radius-circle">
                <div class="r-p-24">
                  <a-icon :class="getTextClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          type="pay-circle"
                  ></a-icon>
                </div>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col flex="84px">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-card class="r-text-center r-p-0 r-bg-dark r-radius-circle">
                <div class="r-p-24">
                  <a-icon :class="getTextClass()"
                          :style="{ fontSize: '36px' }"
                          theme="filled"
                          type="tags"
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
    image: { type: String, required: false, default: 'service-01.svg' },
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
    }
  }
}
</script>
