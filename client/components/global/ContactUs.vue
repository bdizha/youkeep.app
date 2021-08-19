<template>
  <a-card class="r-bg-primary">
    <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading r-text-white">
              Get your Brickcent account today!
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-medium r-text-white">
              Are you ready to join the revolution of real estate investing?
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 6 }" :md="{ span: 8 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h4 class="r-heading-light r-text-white r-text-uppercase">
              Ready to join now?
            </h4>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <nuxt-link v-if="hasJobs" to="/career/openings">
              <a-button class="r-btn-secondary"
                        block
                        size="large"
                        type="secondary"
              >
                See job openings
              </a-button>
            </nuxt-link>
            <a-button v-if="!hasJobs" class="r-btn-secondary"
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
    hasJobs: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
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
