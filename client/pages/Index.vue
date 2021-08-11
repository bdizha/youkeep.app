<template>
  <a-row :gutter="[96,48]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-white">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-24">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-blue r-text-uppercase">
                            Accelerating business innovation
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h2 class="r-heading r-text-uppercase">
                            <span class="r-text-secondary">Envision ></span>
                            <span class="r-text-primary">Apply ></span>
                            <span class="r-text-blue">Evaluate</span>
                          </h2>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            As we envision a world where machines do more and more work that people used to do, our minds naturally turn to those who would be displaced by technological advance.
                          </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                Why 1000s of retailers <span class="r-text-secondary">choose</span> Graphigem?
              </h2>
            </a-col>
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/12.svg'" :size="90" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-text-x-large">
                          <a-icon class="r-text-primary" type="up"/>
                          <span class="r-number r-icon-effect-secondary">36</span>
                          <span class="r-subscript r-text-secondary">%</span>
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-secondary">Envision</span> It
                        </h4>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/14.svg'" :size="90" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-text-x-large">
                          <a-icon class="r-text-primary" type="up"/>
                          <span class="r-number r-icon-effect-secondary">48</span>
                          <span class="r-subscript r-text-secondary">%</span>
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-secondary">Increase</span> in returning orders
                        </h4>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/15.svg'" :size="90" class="r-avatar-auto"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <h1 class="r-text-x-large">
                          <a-icon class="r-text-primary" type="up"/>
                          <span class="r-number r-icon-effect-secondary">24</span>
                          <span class="r-subscript r-text-secondary">%</span>
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading">
                          <span class="r-text-secondary">Increase</span> in business volume
                        </h4>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <div class="r-mv-24">
            <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading-light r-text-blue r-text-uppercase">
                  Innovating, everything
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h2 class="r-heading">
                 Everything we do is based on inclusion
                </h2>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  As we envision a world where machines do more and more work that people used to do, our minds naturally turn to those who would be displaced by technological advance.
                </p>
              </a-col>
            </a-row>
          </div>
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                         class="r-text-left"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                      <a-col :lg="{ span: 20 }" :md="{ span: 20 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                             class="r-text-left"
                      >
                        <h3 class="r-heading-light r-text-secondary r-text-uppercase">

                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                             class="r-text-center r-hide-sm"
                      >
                        <r-store-shop-now></r-store-shop-now>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-index',
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('base/onReviews', {})
  },
  data () {
    return {
      banner: 'art-01.png',
      isProcessing: true,
      testimonials: [],
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: mapGetters({
    store: 'base/store',
    category: 'base/category',
    categories: 'shop/categories',
    hasCategories: 'base/hasCategories'
  }),
  created () {
  },
  methods: {
    onStoreTray () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
