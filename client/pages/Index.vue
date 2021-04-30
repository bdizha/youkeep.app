<template>
  <a-row type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-actions v-if="hasCategories"></r-category-actions>
    </a-col>
    <a-col class="r-ph-24 r-mt-48" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <a-row type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
          <a-row :gutter="[24,24]" type="flex" justify="start"
                 align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }">
              <div class="r-margin-out-12">
                <r-category-slider></r-category-slider>
              </div>
            </a-col>
            <a-col class="r-text-left" :xs="{ span: 24}" :sm="{ span: 24 }" :md="{ span: 16 }"
                   :lg="{ span: 16 }">
              <a-row :gutter="[24,24]"  type="flex" align="middle" justify="space-between">
                <a-col class="r-text-left" :xs="{ span: 24}" :sm="{ span: 14 }" :md="{ span: 16 }"
                       :lg="{ span: 16 }">
                  <h3 class="r-heading">
                    Shop everywhere, anytime!
                  </h3>
                </a-col>
                <a-col class="r-text-center" :xs="{ span: 24}" :sm="{ span: 10 }" :md="{ span: 8 }"
                       :lg="{ span: 8 }">
                  <r-store-shop-now></r-store-shop-now>
                </a-col>
                <a-col :xs="{ span: 24 }"
                       :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                  <div class="r-margin-out-12">
                    <r-store-arrows></r-store-arrows>
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 8 }"
                   :lg="{ span: 8 }">
              <a-card>
                <a-card-meta>
                  <template slot="description">
                    <h4 class="r-heading-light r-text-uppercase">
                      It's shopping time!
                    </h4>
                    <h1 class="r-heading r-text-secondary">
                      <span class="r-text-primary">Shop more,</span><br>
                      <span class="r-text-secondary">Pay less.</span>
                    </h1>
                    <p class="r-text-normal">
                      Yes, as long as you shop it with Shopple, you are fully powered.
                    </p><br/>
                    <a-row type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }">
                        <r-delivery-form></r-delivery-form>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-row class="r-mt-48" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
          <r-welcome></r-welcome>
          <r-testimonials></r-testimonials>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  layout: 'default',
  name: 'r-index',
  props: {},
  async asyncData({store}) {
    await store.dispatch('base/onReviews', {});
  },
  data() {
    return {
      banner: 'art-01.png',
      isProcessing: true,
      testimonials: [],
      modal: {
        current: null,
        isVisible: false,
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
  mounted() {
  },
  methods: {
    onStoreTray() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'store';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
