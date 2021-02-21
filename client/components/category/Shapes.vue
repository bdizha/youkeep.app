<template>
  <a-row class="r-slider" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <VueSlickCarousel v-if="hasData" v-bind="settings">
        <nuxt-link class="r-slider-item r-text-view-more"
                   v-for="(category, index) in categories"
                   :key="category.id"
                   :to="category.route">
          <r-avatar shape="circle"
                    size="36"
                    :data-src="category.photo"
                    src="/assets/icon_default.png"
                    :style="'background-image: url(/' + category.photo + ');'">
          </r-avatar>
          <div class="r-text-slider">
            {{ category.name }}
          </div>
        </nuxt-link>
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
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-shapes',
  props: {
    columns: {type: Number, required: false, default: 8},
  },
  data() {
    return {
      hasData: false,
      settings: {
        slidesToShow: this.columns,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        variableWidth: true,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 9,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": 6,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 560,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 1,
              "dots": false
            }
          }
        ]
      },
    };
  },
  computed: mapGetters({
    categories: "shop/categories"
  }),
  created() {
    this.payload();
  },
  mounted() {
    this.hasData = true;
  },
  methods: {
    payload() {
    },
    onCategory(category) {
      // this.$store.dispatch('base/onCategory', category.route);
    },
  }
};
</script>
