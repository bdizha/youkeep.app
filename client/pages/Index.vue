<template>
  <a-row class="r-welcome" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-actions></r-category-actions>
      <a-row class="r-mt-48" type="flex" justify="center" align="middle">
        <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
          <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-card class="">
                <a-card-meta>
                  <template slot="description">
                    <h1 class="r-heading">
                      It's shopping time!
                    </h1>
                    <h2 class="r-heading">
                      <span class="r-heading r-text-secondary">Shop more,</span>
                      <span class="r-text-secondary">Pay less</span>
                    </h2>
                    <p class="r-text-normal">
                      Yes, as long as you shop it with Shopple, you are fully in control.
                    </p><br/>
                    <a-row type="flex" justify="start">
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
              <a-card v-if="hasCategories">
                <a-card-meta>
                  <template slot="description">
                    <r-banner></r-banner>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
          <r-steps></r-steps>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 21 }" :lg="{ span: 21 }">
          <r-welcome></r-welcome>
          <r-features :span="24"></r-features>
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
      images: [
        'welcome-01.jpg',
        'welcome-02.jpg',
        'welcome-03.jpg',
      ],
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
    categories: 'base/categories',
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
    },
    async onCategories() {
    }
  }
};
</script>
