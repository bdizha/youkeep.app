<template>
  <a-row :class="{'r-show-category-spin__active' :processes.isCategories}" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row :gutter="[24,24]" v-if="hasData && hasCategories" class="r-slider">
        <a-col :span="24">
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
      <a-row v-if="!processes.isCategories && isEmpty" type="flex"
             justify="center" align="middle">
        <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <a-card class="r-p-48 r-text-center">
            <a-row :gutter="[24,24]" type="flex" justify="center"
                   align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 24 }"
                     :lg="{ span: 24 }">
                <h1 class="r-heading">
                  Everything your heart desires
                </h1>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
                     :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <a-button block
                          size="default"
                          type="secondary"
                          class="r-btn-secondary">
                  <a-icon type="clock-circle"/>
                  Coming soon
                </a-button>
              </a-col>
            </a-row>
          </a-card>
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
    size: {type: Number, required: false, default: 150},
    columns: {type: Number, required: false, default: 3},
  },
  data() {
    return {
      hasData: false,
      process: 'categories',
      settings: {
        "slidesToShow": this.columns,
        "slidesToScroll": 1,
        "dots": false,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": this.columns,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": this.columns > 2 ? 2 : this.columns,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 560,
            "settings": {
              "slidesToShow": 1,
              "slidesToScroll": 1,
              "dots": false
            }
          }
        ]
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
  mounted() {
    this.hasData = true;
  },
  methods: {
    async payload() {
    }
  }
};
</script>
