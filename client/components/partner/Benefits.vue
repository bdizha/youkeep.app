<template>
  <div class="r-mv-96">
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"

          >
            <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <r-avatar data-src="/assets/asset-11.svg" :size="300" class="r-avatar-block"
                ></r-avatar>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-uppercase">
                      Benefits for partners
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <h2 class="r-heading">
                      <span class="r-text-green">Youkeep</span> makes partners successful
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <p class="r-text-medium">
                      Whether your business is big or small, Youkeep gives you the tools and resources you need. Join
                      our
                      partner community to share insights with the best in the business.
                    </p>
                  </a-col>
                  <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <p class="r-text-normal">
                      Whether your business is big or small, Youkeep gives you the tools and resources you need. Join
                      our
                      partner community to share insights with the best in the business.
                    </p>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"

          >
            <a-row :gutter="[48,48]" align="top" class="r-text-left" justify="center" type="flex">
              <a-col v-for="(value, index) in values"
                     :key="index"
                     :lg="{ span: 8 }" :md="{ span: 8 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-card class="r-bg-green-light">
                  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                    <a-col>
                      <div class="r-bg-white-green r-p-12 r-border-radius-12">
                        <a-icon class="r-text-green"
                                :style="{ fontSize: '45px' }"
                                :type="value.icon"
                        ></a-icon>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading" v-html="value.title"></h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal  ">
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
</template>
<script>
export default {
  name: 'r-partner-benefits',
  props: {},
  data () {
    return {
      values: [
        {
          icon: 'bank',
          title: '<span class="r-text-green">Earn</span> more revenue',
          content: 'Use your voice to inspire smooth shopping experiences around the world. Earn revenue by referring retailers to the ultimate shopping service that’s more than just a simple payment solution.'
        },
        {
          icon: 'shop',
          title: '<span class="r-text-green">Connect</span> with retailers',
          content: 'The Youkeep Partner Directory provides a place to market your product or service directly to people who want to work with you. We’ll connect you with the right people so you can make the magic happen.'
        },
        {
          icon: 'area-chart',
          title: '<span class="r-text-green">Evaluate</span> and scale',
          content: 'The Youkeep Partner Program offers comprehensive technical documentation, a tight-knit partner community, easily accessible training and resources, and dedicated partner support.'
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
