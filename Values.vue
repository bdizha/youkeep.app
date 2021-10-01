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
                    Our values
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-secondary">Value</span> = Problem + Solution
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Our core values represent more than ideals we strive in providing brands of all sizes with on-demand checkout options for their customers.
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
                  <a-card class="r-bg-white-primary">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col>
                        <div class="r-bg-white-primary r-p-24 r-border-radius-12">
                          <a-icon class="r-text-primary"
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
          icon: 'radius-upleft',
          title: 'Contribution',
          content: 'Build, collaborate, improve. Repeat. We always ask, what, why, how, we challenge the status quo, and we apply and evaluate at every turn of the clock. '
        },
        {
          icon: 'border-top',
          title: 'Collaboration',
          content: 'We respect all individuals and cultures and value their contributions in all aspects of the business with genuine appreciation of their unique contributions.'
        },
        {
          icon: 'radius-upright',
          title: 'Innovation',
          content: 'It’s about dreaming big and changing the game. We are proud to create an exciting and dynamic financial solution for customers. '
        },
        {
          icon: 'border-left',
          title: 'Credibility',
          content: 'We work with integrity and respect, and encourage asking for help, and extend the same help to others to create value and prosper together.'
        },
        {
          icon: 'border-verticle',
          title: 'Dynamism',
          content: 'No one expected this to be easy. We are resilient - we apply methodical evaluation and keep analysing feedback loops recursively.'
        },
        {
          icon: 'border-right',
          title: 'Tenacity',
          content: 'Every person here has an obligation to question the current marketplace status, spell out concerns, and yield to offer their insight. '
        },
        {
          icon: 'radius-bottomleft',
          title: 'Profitability',
          content: 'We live for merchants of all sizes and are fanatical about their success. We explore new ideas and discover creative solutions as a unit.'
        },
        {
          icon: 'border-bottom',
          title: 'Sustainability',
          content: 'We pursue the highest utility value for both our customers and our people who work with us. We make value but simply adding sub value parts.'
        },
        {
          icon: 'radius-bottomright',
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
