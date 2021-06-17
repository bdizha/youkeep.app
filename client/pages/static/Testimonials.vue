<template>
  <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
    <a-col style="background: #f50a2b15;" class="r-relative" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-mv-48" style="padding-bottom: 240px">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                 :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                          Read our
                        </h3>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          Our customers stories
                        </h1>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Thousands of small stores trust Shopple with their finances
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <r-avatar class="r-avatar-block" :dataSrc="'/images/content/14.png'" :size="600"
                ></r-avatar>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </div>
      <r-wave></r-wave>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-shop-now fill="#f50a2b15" theme="secondary"></r-shop-now>
    </a-col>
  </a-row>
</template>
<script>

export default {
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Shopple via desktop or iPhone - we go where you go' },
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
