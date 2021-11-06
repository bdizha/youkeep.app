<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="end" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase">
                        Scale Up
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h2 class="r-heading">
                        <span class="r-text-primary">Enabling</span> partners to succeed
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-medium">
                        With over thousands of collections, we are proud to host the widest range of categories, ranging
                        from digital to physical NFTs
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-normal">
                        While we take pride in being the first and largest marketplace and in our robust feature set, we
                        also help our partners succeed with the following...
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <r-avatar data-src="/assets/asset-04.svg" :size="300" class="r-avatar-block"
                  ></r-avatar>
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
                  <a-card class="r-bg-tertiary-light">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col>
                        <div class="r-bg-dark r-p-12 r-border-radius-square">
                          <a-icon class="r-text-secondary"
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
                        <h4 class="r-heading" v-html="value.title"></h4>
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
  name: 'r-partner-welcome',
  props: {},
  data () {
    return {
      values: [
        {
          icon: 'tags',
          title: '<span class="r-text-primary">Integrate</span> Youkeep',
          content: 'Set up your clients with a trusted, customizable, and intuitive payment solution to help grow their business. Earn revenue while helping retailers integrate Youkeep\'s monetization tools.'
        },
        {
          icon: 'diff',
          title: '<span class="r-text-primary">Provide</span> solutions',
          content: 'Youkeep retailers seek help from Youkeep Partners to expand their eCommerce and in-store offerings. Youkeep relies on our network of experts to help retailers hit their business goals.'
        },
        {
          icon: 'pie-chart',
          title: '<span class="r-text-primary">Accelerate</span> growth',
          content: 'Take it to the next level. Two is better than one. At Youkeep, we’re customer obsessed. Let’s work together to drive incremental revenue for retailers and create smooth customer experiences.'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
