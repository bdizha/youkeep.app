<template>
  <a-row class="r-help" :gutter="[48,48]" type="flex" justify="center" align="middle">
    <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
          <a-row class="r-mv-48" type="flex" justify="center" align="middle">
            <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 16 }"
                   :lg="{ span: 15 }"
            >
              <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
                <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 16 }"
                       :lg="{ span: 15 }"
                >
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Frequently Asked Questions
                      </h2>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        We strive to price our plans in a simple, clear way, but if you have any concerns or need a
                        little
                        extra help choosing a plan, feel free to reach out to us.
                      </p>
                      <p class="r-text-normal">
                        We strive to price our plans in a simple, clear way, but if you have any concerns or need a
                        little
                        extra help choosing a plan, feel free to reach out to us.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 8 }"
                     :lg="{ span: 9 }"
              >
                  <p class="r-text-normal">
                    <a-icon type="check"></a-icon>
                    <span>
                          No hidden fees.
                        </span>
                  </p>
                  <p class="r-text-normal">
                    <a-icon type="check"></a-icon>
                    <span>
                        No confusing tiered pricing.
                        </span>
                  </p>
                  <p class="r-text-normal">
                    <a-icon type="check"></a-icon>
                    <span>
                          What you see is what you get
                        </span>
                  </p>
              </a-col>
              </a-row>
            </a-col>
          </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col class="r-ph-24 r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 16 }"
           :lg="{ span: 15 }"
    >
      <a-row :gutter="[96,96]" type="flex" justify="start" align="top">
        <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <r-help-list></r-help-list>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-help',
  props: {},
  async fetch () {
    console.log('loading data')
    await this.$store.dispatch('base/onFaqs', {})
  },
  data () {
    return {}
  }
}
</script>
