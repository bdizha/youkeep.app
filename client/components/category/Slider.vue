<template>
  <a-row :class="{'r-show-category-spin__active' :processes.isCategories}" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row v-if="hasCategories" class="r-slider">
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
    isEmpty() {
      return !this.hasProducts && !this.hasCategories;
    },
    ...mapGetters({
      categories: "base/categories",
      category: "shop/category",
      store: "shop/store",
      hasProducts: 'shop/hasProducts',
      hasCategories: "base/hasCategories",
      processes: "base/processes",
    })
  },
  created() {
    this.payload();
  },
  mounted() {
  },
  methods: {
    async payload() {
    }
  }
};
</script>
