<template>
  <a-row class="r-welcome" type="flex" justify="center">
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-actions v-if="hasCategories"></r-category-actions>
      <div class="r-margin-out-sm">
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
            <a-row :gutter="[24,24]" type="flex" justify="start"
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
                        Yes, as long as you shop it with Shopple, you are fully in control.
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
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                <r-banner v-if="hasCategories" :category="categories[0]"></r-banner>
              </a-col>
            </a-row>
            <r-steps></r-steps>
          </a-col>
        </a-row>
        <a-row class="r-mt-48" type="flex" justify="center" align="middle">
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
    hasCategories: 'shop/hasCategories',
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
    },
    async onCategories() {
    }
  }
};
</script>
