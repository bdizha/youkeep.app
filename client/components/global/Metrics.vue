<template>
  <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
    <a-col v-if="false" :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h4 class="r-heading-light">
        Addtract powers ambitious multichannel brands of all sizes in all industries.
      </h4>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
        <a-col v-for="(metric, index) in metrics"
               :key="index"
               :lg="{ span: 6 }" :md="{ span: 6 }"
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
                    <h1 class="r-text-xlarge-light" :class="getTextClass(metric)">
                      {{  metric.content }}
                    </h1>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
                      {{  metric.title }}
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
          title: 'Average increase in order value',
          content: '+75%',
          theme: 'primary'
        },
        {
          title: 'Buyers discovering new products',
          content: '4500+',
          theme: 'secondary'
        },
        {
          title: 'Products ready to be sampled',
          content: '6000+',
          theme: 'primary'
        },
        {
          title: 'Suppliers waiting to connect',
          content: '3000+',
          theme: 'secondary'
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
