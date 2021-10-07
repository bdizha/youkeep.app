<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
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
                        <span class="r-text-primary">Help</span> retailers succeed
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <p class="r-text-medium">
                        Play a pivotal role in introducing new retailers to Klarna, and offer solutions that help bring a
                        uniquely smoooth shopping experience online and offline to millions of customers worldwide.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <r-avatar data-src="/assets/asset-consumer.svg" :size="300" class="r-avatar-block"
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
                  <a-card class="r-bg-white-primary">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col>
                        <div class="r-bg-white-primary r-p-12 r-border-radius-12">
                          <a-icon class="r-text-primary"
                                  :style="{ fontSize: '45px' }"
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
  name: 'r-partner-welcome',
  props: {},
  data () {
    return {
      values: [
        {
          icon: 'tags',
          title: '<span class="r-text-primary">Integrate</span> Spazastop',
          content: 'Set up your clients with a trusted, customizable, and intuitive payment solution to help grow their business. Earn revenue while helping retailers integrate Spazastop\'s monetization tools.'
        },
        {
          icon: 'diff',
          title: '<span class="r-text-primary">Provide</span> solutions',
          content: 'Spazastop retailers seek help from Spazastop Partners to expand their eCommerce and in-store offerings. Spazastop relies on our network of experts to help retailers hit their business goals.'
        },
        {
          icon: 'line-chart',
          title: '<span class="r-text-primary">Accelerate</span> growth',
          content: 'Take it to the next level. Two is better than one. At Spazastop, we’re customer obsessed. Let’s work together to drive incremental revenue for retailers and create smooth customer experiences.'
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
