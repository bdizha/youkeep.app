<template>
  <a-card :class="getBgClass()">
    <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading r-text-white">
              {{ title }}
            </h3>
          </a-col>
          <a-col v-if="hasMore" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-medium r-text-white">
              {{ heading }}
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 6 }" :md="{ span: 8 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <nuxt-link v-if="hasJobs" to="/career/openings">
              <a-button :class="getBtnClass()"
                        block
                        size="large"
                        type="secondary"
              >
                See job openings
              </a-button>
            </nuxt-link>
            <a-button v-if="!hasJobs" :class="getBtnClass()"
                      @click="onModal"
                      block
                      size="large"
                      type="blue"
            >
              Get started
            </a-button>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-contact-us',
  props: {
    hasJobs: { type: Boolean, required: false, default: false },
    hasMore: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: 'Get your Youkeep account today!' },
    theme: { type: String, required: false, default: 'tertiary' },
    accent: { type: String, required: false, default: 'secondary' },
    heading: { type: String, required: false, default: 'Are you ready to join Youkeep?' }
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
    getBtnClass () {
      return `r-btn-${this.accent}`
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
