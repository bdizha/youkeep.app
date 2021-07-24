<template>
  <a-row :gutter="[48,48]" align="middle" class="r-help" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-row align="middle" class="r-mv-48" justify="center" type="flex">
              <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h2 class="r-heading">
                          Frequently Asked Questions
                        </h2>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
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
                  <a-col :lg="{ span: 9 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                         class="r-text-left"
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
    <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-ph-24 r-text-left"
    >
      <a-row :gutter="[96,96]" align="top" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-text-left"
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
