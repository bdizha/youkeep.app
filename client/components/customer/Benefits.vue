<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
    <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-uppercase">
                  Benefits for shoppers
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <h3 class="r-heading">
                  <span class="r-text-secondary">Choose</span> to pay with Paise on checkout
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <p class="r-text-medium">
                  Make easy monthly payments over 3 monthly payments at participating stores. Paise is available only to eligibal products.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"

              >
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"

                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col v-for="(benefit, index) in benefits"
                           :key="index"
                           :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24, 24]" align="middle" type="flex">
                        <a-col flex="99px">
                          <a-card class="r-bg-white">
                            <a-icon class="r-text-secondary"
                                    :style="{ fontSize: '53px' }"
                                    :type="benefit.icon"></a-icon>
                          </a-card>
                        </a-col>
                        <a-col flex="1 1 0">
                          <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading-light">
                                {{ benefit.title }}
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading" v-html="benefit.heading"></h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                              <p class="r-text-normal">
                                {{ benefit.content }}
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
      <a-col class="r-text-right" :lg="{ span: 6 }" :md="{ span: 9 }" :sm="{ span: 24 }"
             :xs="{ span: 24}"
      >
        <r-avatar data-src="/assets/asset-17.svg" :size="300" class="r-avatar-block"
        ></r-avatar>
      </a-col>
    </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-customer-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'file-protect',
          heading: '<span class="r-text-secondary">Safe</span> to check',
          content: 'Checking won’t affect your credit score.'
        },
        {
          icon: 'dollar',
          heading: '<span class="r-text-secondary">Zero</span> hidden costs',
          content: 'Know up front exactly what you’ll owe.'
        },

        {
          icon: 'clock-circle',
          heading: '<span class="r-text-secondary">Quick</span> and simple',
          content: 'Get a real-time decision on demand.'
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
