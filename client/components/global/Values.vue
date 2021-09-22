<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    Our values
                  </h2>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Our core values represent more than ideals we strive to embody - they reflect who we are, and how we empower our team to empower the brands they serve.
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
                  <a-card class="r-bg-white">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading">
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
          title: 'Courage',
          content: 'It’s about dreaming big and changing the game. We are proud to create an exciting and dynamic services forever. '
        },
        {
          title: 'Respect',
          content: 'We respect all individuals and cultures and value their contributions in all aspects of the business with genuine appreciation. '
        },
        {
          title: 'Innovation',
          content: 'Listen, collaborate, improve. Repeat. We always ask why, we challenge the status quo, and we innovate at every turn. '
        },
        {
          title: 'Focus',
          content: 'We live for brands and are fanatical about their success. We explore new ideas and discover creative solutions.'
        },
        {
          title: 'Tenacity',
          content: 'No one expected this to be easy. We are resilient - we dig in and keep going. We think openly about how to serve brands.'
        },
        {
          title: 'Relentless',
          content: 'We pursue the highest standards for both our customers and our people who work with us. We simply don\'t give up.'
        },
        {
          title: 'Responsibility',
          content: 'Every person here has an obligation to question norms, voice concerns, and offer their perspective. '
        },
        {
          title: 'Collaboration',
          content: 'We work with integrity and respect, ask for help, and extend the same help to others to create value. '
        },
        {
          title: 'Humanity',
          content: 'Our people are our greatest strength. We have fun and make real connections with one another and with the brands we serve.'
        },
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
