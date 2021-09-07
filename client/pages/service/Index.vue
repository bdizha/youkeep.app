<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none r-pt-81">
        <div class="r-mv-48">
          <a-row :gutter="[96,48]" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" align="middle" justify="end" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
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
                        {{ service.summary }}
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
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
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-avatar data-src="/assets/setup-04.svg" :size="300" class="r-avatar-block"
              ></r-avatar>
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
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col v-for="(feature, index) in service.features"
                         :key="index"
                         :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-card class="r-bg-white">
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex"
                      >
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
    await store.dispatch('content.js/onProduct', slug)
  },
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    products: 'content/products',
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
