<template>
  <a-row :gutter="[48,48]" align="middle" class="r-help" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <a-row align="middle" class="r-mv-48" justify="center" type="flex">
        <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-text-left"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
                   class="r-text-left"
            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Hi. How can we help?
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-help-search></r-help-search>
                </a-col>
                <a-col v-if="!isLoggedIn" :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-grey">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              <b>Sign in for expedited support:</b>
                              We strive to price our plans in a simple, clear way, but if you have any concerns or need
                              a
                              little extra help choosing a plan, feel free to reach out to us anytime 24/7.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-auth-actions></r-auth-actions>
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
    <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-ph-24 r-text-left"
    >
      <r-help></r-help>
    </a-col>
  </a-row>
</template>
<script>
export default {
  async asyncData ({ store, params }) {
    console.log('onHelp params', params)
    await store.dispatch('article/onHelp', params)
  },
  data () {
    return {
      hasData: true
    }
  },
  created () {
    this.hasData = true
  }
}
</script>
