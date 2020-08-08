<template>
  <a-row v-if="hasCategories" type="flex" justify="center">
    <a-col class="gutter-row r-padding-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row v-if="hasCategories" class="r-slider">
        <a-col class="gutter-row" :span="24">
          <VueSlickCarousel v-bind="settings">
            <r-category-bundle
              v-if="c.id != category.id"
              v-for="(c, index) in categories"
              :key="index"
              style="display: block; width: 100%;"
              :category="c"></r-category-bundle>
            <template #prevArrow="arrowOption">
              <div class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
                <a-icon type="left"/>
              </div>
            </template>
            <template #nextArrow="arrowOption">
              <div class="r-slick-arrow r-slick-arrow-next r-arrow-next">
                <a-icon type="right"/>
              </div>
            </template>
          </VueSlickCarousel>
        </a-col>
      </a-row>
      <a-row v-if="!processes.isCategories && isEmpty" class="r-margin-vertical-24" type="flex"
             justify="center" align="middle">
        <a-col class="gutter-row r-bg-white" :xs="{ span: 24 }" :sm="{ span: 12 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }">
          <a-row :gutter="[24,24]" class="r-margin-vertical-24" type="flex" justify="center"
                 align="middle">
            <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }">
              <h1 class="r-heading">
                Everything your heart desires
              </h1>
            </a-col>
            <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                   :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-button block
                        size="large"
                        type="primary"
                        class="r-btn-primary">
                <a-icon type="clock-circle"/>
                Coming soon
              </a-button>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-slider',
  props: {
    size: {type: Number, required: false, default: 24},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      process: 'categories',

      settings: {
        "slidesToShow": 3,
        "slidesToScroll": 1,
        "infinite": true,
        "dots": false
      },
    };
  },
  computed: {
    slidesToShow() {
      return this.categories.length < 3 ? this.categories.length : 3;
    },
    isEmpty() {
      return !this.hasProducts && !this.hasCategories;
    },
    ...mapGetters({
      categories: "shop/categories",
      category: "shop/category",
      store: "shop/store",
      hasProducts: 'shop/hasProducts',
      hasCategories: "shop/hasCategories",
      processes: "base/processes",
    })
  },
  created() {
    this.payload();
  },
  methods: {
    async payload() {
    }
  }
};
</script>
