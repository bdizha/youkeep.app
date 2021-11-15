<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h4 class="r-heading-light r-text-uppercase">
                    Our craft
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col>
                      <a-card class="r-bg-primary-light r-p-0">
                        <div class="r-p-12">
                          <h4 class="r-heading r-text-secondary">Value</h4>
                        </div>
                      </a-card>
                    </a-col>
                    <a-col>
                      <a-card class="r-bg-dark r-p-0">
                        <div class="r-p-12">
                          <a-icon class="r-text-tertiary"
                                  theme="filled"
                                  :style="{ fontSize: '24px' }"
                                  type="pause-circle"
                          ></a-icon>
                        </div>
                      </a-card>
                    </a-col>
                    <a-col>
                      <a-card class="r-bg-secondary-light r-p-0">
                        <div class="r-p-12">
                          <h4 class="r-heading r-text-tertiary">Network</h4>
                        </div>
                      </a-card>
                    </a-col>
                    <a-col>
                      <a-card class="r-bg-dark r-p-0">
                        <div class="r-p-12">
                          <a-icon class="r-text-tertiary"
                                  theme="filled"
                                  :style="{ fontSize: '24px' }"
                                  type="plus-circle"
                          ></a-icon>
                        </div>
                      </a-card>
                    </a-col>
                    <a-col>
                      <a-card class="r-bg-tertiary-light r-p-0">
                        <div class="r-p-12">
                          <h4 class="r-heading r-text-primary">Trust</h4>
                        </div>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Our core values rest primarily provide artists, collectors,  and network partners
                    of all sizes with our on-demand NFT marketplace services.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    They depict who we are, and how we structure our team's operations to empower the participants we
                    serve every day by the tick of the clock.
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
                  <a-card class="r-bg-primary-light r-rotatable">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col>
                        <div class="r-bg-dark r-p-12 r-border-radius-square">
                          <a-icon class="r-text-tertiary"
                                  theme="filled"
                                  :style="{ fontSize: '36px' }"
                                  :type="value.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading r-text-secondary">
                          {{ value.title }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal  ">
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
          content: 'Build, evaluate, repeat. We always seek ways to challenge the status quo as we apply and evaluate at every turn of the clock. '
        },
        {
          icon: 'bank',
          title: 'Mutuality',
          content: 'We encourage reciprocity and networks of trust and  value their respective contributions with corresponding value tokens in each transaction.'
        },
        {
          icon: 'rocket',
          title: 'Innovation',
          content: 'It’s about dreaming big and changing the game. We are proud to create an exciting and dynamic financial solution for everyone. '
        },
        {
          icon: 'bulb',
          title: 'Sustainability',
          content: 'We live for collectors and artists of all sizes and are fanatical about their success. We explore new ideas and discover creative solutions as a unit.'
        },
        {
          icon: 'eye',
          title: 'Difference',
          content: 'We pursue the highest utility value for both our collectors and our artists and make value by enabling high yield on their asset appreciation.'
        },
        {
          icon: 'golden',
          title: 'Network',
          content: 'Our partners are the greatest treasure to us. Working together with the market players we serve give us the best economical wings we need.'
        }
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
