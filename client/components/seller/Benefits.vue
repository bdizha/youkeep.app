<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Benefits for merchants
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">
                    <span class="r-text-secondary">Add</span> value to the marketplace
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Paise enables sellers to delight their shoppers with on demand, adaptive and secure checkout payment
                    options.
                  </p>
                </a-col>
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
                      <a-card class="r-bg-primary-light">
                        <a-row :gutter="[24, 24]" type="flex">
                          <a-col flex="75px">
                            <a-icon class="r-text-secondary"
                                    :style="{ fontSize: '75px' }"
                                    :type="benefit.icon"></a-icon>
                          </a-col>
                          <a-col flex="1 1 0">
                            <a-row :gutter="[6,6]" align="middle" justify="center" type="flex">
                              <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
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
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-avatar data-src="/assets/asset-25.svg" :size="300" class="r-avatar-block"
              ></r-avatar>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-seller-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'shop',
          title: 'Instant and simple',
          heading: '<span class="r-text-secondary">Enable</span> seamless customer experience',
          content: 'Built to delight your customers while enabling your base line to thrive.'
        },
        {
          icon: 'dollar',
          title: 'Zero fees charged',
          heading: '<span class="r-text-secondary">Offer</span> on demand payment options',
          content: 'It\'s never been easier to give your customers flexible payment options.'
        },
        {
          icon: 'sync',
          title: 'No credit impact',
          heading: '<span class="r-text-secondary">Earn</span> more returning customers',
          content: 'Enable more buying shoppers and increase recurring orders with Paise.'
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
