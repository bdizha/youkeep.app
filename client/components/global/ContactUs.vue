<template>
  <a-card class="r-bg-blue">
    <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading">
              We’re <span class="r-text-primary">excited</span> to meet you!
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-normal">
              Are you ready to join the revolution of real estate investing?
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 6 }" :md="{ span: 8 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h4 class="r-heading-light r-text-white r-text-uppercase">Ready to join us?</h4>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <nuxt-link v-if="hasJobs" to="/career/openings">
              <a-button class="r-btn-primary"
                        block
                        size="large"
                        type="secondary"
              >
                See job openings
              </a-button>
            </nuxt-link>
            <a-button v-if="!hasJobs" class="r-btn-primary"
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
