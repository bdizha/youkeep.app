<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 18 }"
           :lg="{ span: 18 }">
      <a-row type="flex" justify="center">
        <a-col :xs="{ span: 24 }" :lg="{ span: 24 }">
          <a-row class="r-bg-secondary-light" type="flex" justify="start">
            <a-col :xs="{ span: 24 }"
                   :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-row type="flex" justify="start">
                <a-col class="r-p-48 r-bg-welcome" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }">
                  <a-row type="flex" justify="start">
                    <a-col class="r-pv-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <h1 class="r-heading">
                        Shop online with Owami
                      </h1>
                      <h2 class="r-heading">
                        <span class="r-heading r-text-primary">Shop more,</span>
                        <span class="r-text-secondary">Pay less</span>
                      </h2>
                      <p class="r-text-normal">
                        Yes, as long as you shop it with Owami, you are fully in control.
                      </p>
                    </a-col>
                  </a-row>
                  <r-delivery-form></r-delivery-form>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/assets/welcome-01.jpg')">
                </div>
              </div>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <r-category-arrows :size="36"></r-category-arrows>
      <r-steps></r-steps>
      <r-store-slider :title="title" :columns="6"></r-store-slider>
      <r-category-slider></r-category-slider>
      <r-category-list :limit="6"></r-category-list>
      <r-features :span="24"></r-features>
      <!--          <r-testimonials></r-testimonials>-->
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  layout: 'default',
  name: 'r-welcome',
  props: {},
  async asyncData({store}) {
    let payload = {
      category_id: 1,
      limit: 3,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs']
    };

    await store.dispatch('shop/onCategories', payload);
  },
  data() {
    return {
      title: "It's shopping time!",
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
