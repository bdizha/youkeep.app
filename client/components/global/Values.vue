<template>
  <a-card class="r-bg-primary r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h4 class="r-heading-light r-text-uppercase">
                    Spazastop values
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                   <span class="r-text-secondary">Food</span>  <span class="r-text-white">+</span> <span class="r-text-secondary">Community</span>
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Our core values represent more than ideals we strive in providing brands and chefs of all sizes with on-demand meal options for their customers.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    They depict who we are, and how we structure our team's operations to empower the businesses we
                    serve.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="top" class="r-text-left" justify="center" type="flex">
                <a-col v-for="(value, index) in values"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col>
                        <div class="r-bg-primary r-p-24 r-border-radius-12">
                          <a-icon class="r-text-secondary"
                                  :style="{ fontSize: '60px' }"
                                  :type="value.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading r-text-primary">
                          {{ value.title }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal r-text-dark">
                          {{ value.content }}
                        </p>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-values',
  props: {},
  data () {
    return {
      values: [
        {
          icon: 'build',
          title: 'Contribution',
          content: 'Build, collaborate, improve. Repeat. We always ask, what, why, how, we challenge the status quo, and we apply and evaluate at every turn of the clock. '
        },
        {
          icon: 'heart',
          title: 'Gratitude',
          content: 'We respect all individuals and cultures and value their contributions in all aspects of the business with genuine appreciation of their unique contributions.'
        },
        {
          icon: 'rocket',
          title: 'Innovation',
          content: 'It’s about dreaming big and changing the game. We are proud to create an exciting and dynamic financial solution for customers. '
        },
        {
          icon: 'bulb',
          title: 'Sustainability',
          content: 'We live for merchants of all sizes and are fanatical about their success. We explore new ideas and discover creative solutions as a unit.'
        },
        {
          icon: 'eye',
          title: 'Possibility',
          content: 'We pursue the highest utility value for both our customers and our people who work with us. We make value but simply adding sub value parts.'
        },
        {
          icon: 'team',
          title: 'Humanity',
          content: 'Our people are our greatest treasure. Appreciation for one another and with the brands we serve give us the best economical wheels we all deserve.'
        }
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
