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
            Spazastop powers ambitious multi-channel brands and chefs of all sizes in all industries.
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
                    <h1 class="r-text-xl" :class="getTextClass(metric)">
                      {{ metric.content }}
                    </h1>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
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
          title: 'Over 1,000,000 authentic homemade dishes served',
          content: '1M+',
          theme: 'primary'
        },
        {
          title: 'Average seller rating from thousands of happy customers',
          content: '4.8/5',
          theme: 'secondary'
        },
        {
          title: 'All food sellers are food safety inspected and certified',
          content: '60K+',
          theme: 'primary'
        }
      ]
    }
  },
  methods: {
    getTextClass (metric) {
      return `r-text-${metric.theme}`
    },
    getBgClass (metric) {
      return `r-bg-${metric.theme}-light`
    }
  }
}
</script>
