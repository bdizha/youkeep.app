<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Benefits for cravings
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-primary">Enjoy</span> the finest dishes, deals anytime
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    With your favorite restaurants at your fingertips, food discovery is made easy for your taste bites.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    Spazastop satisfies your cravings and connects you with possibilities - more time and energy for
                    yourself and those you love.
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
                  <a-card class="r-bg-white-secondary">
                    <a-row :gutter="[24, 24]" align="middle" type="flex">
                      <a-col>
                        <div class="r-bg-primary r-p-12 r-border-radius-12">
                          <a-icon class="r-text-secondary"
                                  :style="{ fontSize: '45px'}"
                                  :type="benefit.icon"
                          ></a-icon>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
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
  name: 'r-customer-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'heart',
          heading: '<span class="r-text-primary">Support</span> local cooks',
          content: 'Unlike other food outlets, you know exactly who is preparing your food. Let\'s fill you up with yummy meals and more.'
        },
        {
          icon: 'appstore',
          heading: '<span class="r-text-primary">Discover</span> new dishes',
          content: 'Reconnect with your local faves or discover and choose delicious meals and we\'ll deliver to you as per your schedule.'
        },

        {
          icon: 'fire',
          heading: '<span class="r-text-primary">Embrace</span> your desires',
          content: 'Enjoy on-demand homemade food by local cooks fast and easy, with endless deals, without sacrificing time.'
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
