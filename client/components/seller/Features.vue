<template>
  <a-card class="r-bg-white-secondary r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-01.svg" :size="300"
                        class="r-avatar-block"
              ></r-avatar>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Transform your business
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    <span class="r-text-primary">Delight</span> your customers with Spazastop
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Improve sales through higher conversion rates, on demand payment options
                    and reduced cart abandonment.
                  </p>
                </a-col>
                <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Spazastop offers growing businesses a single and clear view into checkout activities including
                    but not limited to:
                    instant orders, payment options, customer timeline, financing, and reporting.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"

                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col v-for="(feature, index) in features"
                           :key="index"
                           :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-card class="r-bg-secondary-light">
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col flex="69px">
                            <div class="r-bg-secondary r-p-12 r-border-radius-12">
                              <a-icon class="r-text-primary"
                                      :style="{ fontSize: '45px' }"
                                      :type="feature.icon"
                              ></a-icon>
                            </div>
                          </a-col>
                          <a-col flex="1 1 0">
                            <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h4 class="r-heading" v-html="feature.heading"></h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                                <p class="r-text-normal">
                                  {{ feature.content }}
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                  </a-row>
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
  name: 'r-seller-features',
  props: {},
  data () {
    return {
      features: [
        {
          icon: 'line-chart',
          heading: '<span class="r-text-primary">Market</span>  your restaurant',
          content: 'Built to delight your customers while enabling your base line to thrive.'
        },
        {
          icon: 'gift',
          heading: '<span class="r-text-primary">Obsess</span> with customers',
          content: 'It\'s never been easier to give your customers flexible meal options.'
        },
        {
          icon: 'dollar',
          heading: '<span class="r-text-primary">Serve</span> happy customers',
          content: 'Enable more buying shoppers and increase recurring orders with Spazastop.'
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
