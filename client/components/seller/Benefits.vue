<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Benefits for merchants
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">
                    <span class="r-text-primary">Add</span> value to the marketplace
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Spazastop enables sellers to delight their customers with on demand, adaptive and secure checkout payment
                    options.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col v-for="(benefit, index) in benefits"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-white-primary">
                    <a-row :gutter="[24, 24]" type="flex" align="middle">
                      <a-col>
                        <div class="r-bg-primary-light r-p-12 r-border-radius-12">
                          <a-icon class="r-text-primary"
                                  :style="{ fontSize: '45px' }"
                                  :type="benefit.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
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
          heading: '<span class="r-text-primary">Enable</span> seamless customer experience',
          content: 'Built to delight your customers while enabling your base line to thrive.'
        },
        {
          icon: 'dollar',
          title: 'Zero fees charged',
          heading: '<span class="r-text-primary">Offer</span> on demand payment options',
          content: 'It\'s never been easier to give your customers flexible payment options.'
        },
        {
          icon: 'sync',
          title: 'No credit impact',
          heading: '<span class="r-text-primary">Earn</span> more returning customers',
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
