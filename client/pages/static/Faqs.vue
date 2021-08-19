<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-relative"
           style="background: #d1e7fd;"
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
                          Get answers
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          Frequently asked questions
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Brickcent aims for accuracy and transparency in both our books and how our service works. If
                          anything remains unclear or if you have a question not covered in this FAQ, please send us a
                          message and we will happily get you the answers you need.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button block
                                  class="r-btn-secondary"
                                  size="large"
                                  to="/register"
                                  type="secondary"
                        >
                          Join waiting list
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :dataSrc="'/images/content/6.png'" :size="600" class="r-avatar-block"
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
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-faqs',
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Brickcent via desktop or iPhone - we go where you go' },
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
