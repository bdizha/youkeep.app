<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-primary-light r-pull-h-24 r-border-none r-pt-81">
        <div class="r-mv-48">
          <a-row :gutter="[96,48]" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,48]" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-primary r-text-uppercase">
                        {{ service.title }}
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading r-text-dark">
                        {{ service.heading }}
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-primary r-text-dark">
                        {{ service.summary }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal r-text-dark">
                        {{ service.content }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-primary"
                                @click="onModal"
                                block
                                size="large"
                                type="blue"
                      >
                        Get in touch
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-primary-light">
                    <r-avatar :data-src="'/services/light/' + service.image" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
      >
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 12 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-primary r-text-uppercase">
                Product Features
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <div class="r-product-item-content">
                <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                  <a-col v-for="(feature, index) in service.features"
                         :key="index"
                         :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-card class="r-bg-primary-light">
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-card class="r-bg-primary r-p-0 r-inline-block">
                          <nuxt-img width="60" height="60" :src="'/services/primary/' + feature.image"></nuxt-img>
                          </a-card>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            {{ feature.title }}
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            {{ feature.content }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-card>
                  </a-col>
                </a-row>
              </div>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-services v-if="hasData" :is-show="true"></r-services>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  async asyncData ({ store, params }) {
    const slug = params.slug

    console.log('service params', params)

    await store.dispatch('content.js/onService', slug)
  },
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    services: 'content/services',
    service: 'content/service'
  }),
  created () {
    this.hasData = true
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
