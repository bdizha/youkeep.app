<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-relative"
           style="background: #fbf0c8;"
    >
      <div class="r-mv-48" style="padding-bottom: 240px">
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                 :sm="{  span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                          Read our
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          Our customers stories
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Thousands of small stores trust Addtract with their finances
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :dataSrc="'/images/content/14.png'" :size="600" class="r-avatar-block"
                ></r-avatar>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </div>
      <r-wave></r-wave>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-shop-now fill="#fbf0c8" theme="secondary"></r-shop-now>
    </a-col>
  </a-row>
</template>
<script>

export default {
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Addtract via desktop or iPhone - we go where you go' },
        { content: 'Quickly answer categorization requests from your team' },
        { content: 'Contact your team with our simple messaging feature' },
        { content: 'Contact your team with our simple messaging feature' }
      ],
      modal: {
        isVisible: false,
        current: null,
        message: null,
      },
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    onStoreTray () {
      this.$store.dispatch('app/onStoreTray', true)
    },
  },
}
</script>
