<template>
  <a-row :gutter="[96,48]" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <a-row type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-pv-48">
                  <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-card>
                        <a-card-meta>
                          <template slot="description">
                            <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                     :md="{ span: 24 }"
                                     :lg="{ span: 24 }"
                              >
                                <h3 class="r-heading-light r-text-uppercase">
                                  It's shopping time!
                                </h3>
                              </a-col>
                              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                     :md="{ span: 24 }"
                                     :lg="{ span: 24 }"
                              >
                                <h1 class="r-heading r-text-secondary">
                                  <span class="r-text-primary">Shop More,</span><br>
                                  <span class="r-text-secondary">Pay Less.</span>
                                </h1>
                              </a-col>
                              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                     :md="{ span: 15 }"
                                     :lg="{ span: 16 }"
                              >
                                <h4 class="r-heading-light">
                                  Yes, as long as you shop it with Shopple, you are fully powered to buy what your heart desires.
                                </h4>
                              </a-col>
                              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                     :md="{ span: 12 }"
                                     :lg="{ span: 12 }"
                              >
                              </a-col>
                              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                     :md="{ span: 16 }"
                                     :lg="{ span: 15 }"
                              >
                                <r-delivery-form></r-delivery-form>
                              </a-col>
                            </a-row>
                          </template>
                        </a-card-meta>
                      </a-card>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <r-avatar class="r-avatar-auto" data-src="/images/content/32.png" :size="450"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </div>
              </template>
        </a-card-meta>
      </a-card>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
          <r-category-banners></r-category-banners>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-ph-24">
      <a-row :gutter="[24,24]" type="flex" align="middle" justify="space-between">
        <a-col class="r-text-left" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
            <a-row :gutter="[24,24]" type="flex" align="middle" justify="space-between">
              <a-col class="r-text-left" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 20 }"
                     :lg="{ span: 20 }"
              >
                <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                  Shop everywhere, anytime!
                </h3>
              </a-col>
              <a-col class="r-text-center r-hide-sm" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 4 }"
                     :lg="{ span: 4 }"
              >
                <r-store-shop-now></r-store-shop-now>
              </a-col>
            </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
        >
          <r-store-arrows></r-store-arrows>
        </a-col>
      </a-row>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-arrows v-if="hasCategories"></r-category-arrows>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-welcome></r-welcome>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-ph-24">
        <r-steps></r-steps>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-index',
  layout: 'welcome',
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
    hasCategories: 'base/hasCategories',
  }),
  mounted () {
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
