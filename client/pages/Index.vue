<template>
  <a-row type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-actions v-if="hasCategories"></r-category-actions>
    </a-col>
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-margin-out-sm">
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
            <a-row :gutter="[48,48]" type="flex" justify="start"
                   align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <h1 class="r-heading">
                        It's shopping time!
                      </h1>
                      <h2 class="r-heading r-text-secondary">
                        <span class="r-heading r-text-secondary">Shop more,</span>
                        <span class="r-text-secondary">Pay less</span>
                      </h2>
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
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                <a-card>
                  <div slot="cover">
                    <r-avatar shape="square" :src="'/assets/' + banner"/>
                  </div>
                </a-card>
              </a-col>
            </a-row>
            <a-row class="r-mv-48" type="flex" justify="center" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]"  type="flex" align="middle" justify="space-between">
                        <a-col class="r-text-left" :xs="{ span: 12}" :sm="{ span: 12 }" :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <h2 class="r-heading-light">
                            Shop everywhere
                          </h2>
                        </a-col>
                        <a-col class="r-text-center" :xs="{ span: 12}" :sm="{ span: 12 }" :md="{ span: 6 }"
                               :lg="{ span: 4 }">
                          <r-store-shop-now></r-store-shop-now>
                        </a-col>
                      </a-row>
                      <a-row :gutter="[24,24]" type="flex" justify="center"
                             align="middle">
                        <a-col :xs="{ span: 24 }"
                               :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                          <r-store-arrows></r-store-arrows>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
            <r-welcome></r-welcome>
            <r-testimonials></r-testimonials>
          </a-col>
        </a-row>
      </div>
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
    store: 'shop/store',
    category: 'shop/category',
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
