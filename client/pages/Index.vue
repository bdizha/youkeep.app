<template>
  <a-row :gutter="[96,48]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                            It's shopping time!
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-uppercase">
                            Shop <span class="r-text-primary">More,</span><br>
                            Pay <span class="r-text-secondary">Less.</span>
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Yes, as long as you shop it with Spazamall, you are fully powered to buy what your heart
                            desires.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <r-delivery-form></r-delivery-form>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-category-banners></r-category-banners>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
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
                          Shop everywhere, anytime!
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                             class="r-text-center r-hide-sm"
                      >
                        <r-store-shop-now></r-store-shop-now>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :lg="{ span: 24 }"
                         :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <r-store-arrows></r-store-arrows>
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
