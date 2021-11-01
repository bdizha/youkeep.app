<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h3 class="r-heading-light">
            Youkeep powers ambitious multi-channel brands and artists of all sizes in all industries.
          </h3>
        </a-col>
      </a-row>
    </a-col>
    <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
        <a-col v-for="(metric, index) in metrics"
               :key="index"
               :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card :class="getBgClass(metric)">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h1 class="r-text-xl" :class="getTextClass(metric.accent)">
                      {{ metric.content }}
                    </h1>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium r-text-white">
                      {{ metric.title }}
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-metrics',
  computed: {},
  data () {
    return {
      metrics: [
        {
          title: 'Over 1,000,000 authentic NFTs showcased and collected',
          content: '1M+',
          theme: 'primary',
          accent: 'secondary',
          text: 'white'
        },
        {
          title: 'Average seller rating from millions of happy collectors',
          content: '4.8',
          theme: 'secondary',
          accent: 'tertiary',
          text: 'white'
        },
        {
          title: 'All collectible creators are verified and certified by AI',
          content: '60K+',
          theme: 'tertiary',
          accent: 'primary',
          text: 'white'
        }
      ]
    }
  },
  methods: {
    getTextClass (theme) {
      return `r-text-${theme}`
    },
    getBgClass (metric) {
      return `r-bg-${metric.theme}-light`
    }
  }
}
</script>
