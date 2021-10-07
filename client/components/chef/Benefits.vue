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
                    Benefits for chefs
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">
                    <span class="r-text-primary">Add</span> value to the food marketplace
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Spazastop enables chefs to delight their customers with on-demand, authentic and homemade meals.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    We work hard to help our chefs feel taken care of and supported throughout the entire process.
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
  name: 'r-chef-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'shop',
          title: 'On-demand meal options',
          heading: '<span class="r-text-primary">Enable</span> seamless customer experience',
          content: 'Built to delight your customers while enabling your base line to thrive.'
        },
        {
          icon: 'safety-certificate',
          title: 'Food safety training',
          heading: '<span class="r-text-primary">Earn</span> an accredited food safety certification',
          content: 'It\'s never been easier to give your customers flexible meal options.'
        },
        {
          icon: 'history',
          title: 'Trusted by thousands of customers',
          heading: '<span class="r-text-primary">Serve</span> more returning customers',
          content: 'Satisfy more buying customers and increase recurring orders with Spazastop.'
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
