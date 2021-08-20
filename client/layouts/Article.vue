<template>
  <a-layout class="r-layout__default">
    <r-header :is-icon="true"></r-header>
    <a-layout-content class="r-layout-content">
      <a-row :gutter="[48,0]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[48,0]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-cover-image r-bg-dark r-pull-24 r-border-none r-card-r-128">
                <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <div class="r-mb-48-lg">
                          <a-card class="r-bg-dark r-pull-h-24 r-border-none-sm">
                            <div class="r-mv-48">
                              <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24 }"
                                    >
                                      <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                                        A better way to invest in property..
                                      </h3>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24 }"
                                    >
                                      <h1 class="r-heading">
                                        Brickcent - Resources
                                      </h1>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24 }"
                                    >
                                      <p class="r-text-large">
                                        We created Brickcent to make your unique life better and flexible.
                                      </p>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24 }"
                                    >
                                      <p class="r-text-medium">
                                        We're on the mission to make <span
                                        class="r-text-secondary"
                                      >property</span> investments
                                        <span class="r-text-primary">accessible</span> and
                                        <span class="r-text-secondary">affordable</span> for all South Africans like you.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col class="r-hide-lg" :lg="{ span: 12 }" :md="{ span: 12 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <r-avatar data-src="/images/content/illustrate-1.svg" :size="300" class="r-avatar-block"
                                  ></r-avatar>
                                </a-col>
                              </a-row>
                            </div>
                          </a-card>
                        </div>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <slot/>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="hasFooter" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-footer :has-locations="false"></r-footer>
        </a-col>
      </a-row>
    </a-layout-content>
    <r-spinner :is-absolute="false"></r-spinner>
  </a-layout>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({}),
  async serverPrefetch  () {
    await this.$store.dispatch('base/onIsDark', true)
  },
  created () {
  },
  computed: mapGetters({
    hasFooter: 'base/hasFooter',
    processes: 'base/processes'
  }),
  methods: {}
}
</script>
