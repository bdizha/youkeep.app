<template>
  <a-row class="r-slider" type="flex" justify="center" align="middle">
    <a-col class="r-store-slider gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <VueSlickCarousel v-if="category.stores != null && category.stores.length > 0" v-bind="settings">
        <nuxt-link class="r-text-view-more"
                   v-for="(store, index) in category.stores"
                   :key="store.id"
                   :to="store.route">
          <r-store-face :store="store"></r-store-face>
        </nuxt-link>
        <template #prevArrow="arrowOption">
          <div class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
            <a-icon type="caret-left"/>
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
  name: 'r-store-slider',
  props: {
    columns: {type: Number, required: false, default: 6},
    category: {type: Object, required: false, default: {}},
    title: {type: String, required: false, default: null},
  },
  data() {
    return {
      settings: {
        "slidesToShow": this.columns,
        "slidesToScroll": 1,
        "infinite": true,
        "dots": false,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": this.columns,
              "slidesToScroll": 1,
              "infinite": true,
              "dots": false,
              "gap": 24
            }
          },
          {
            "breakpoint": 600,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 1,
              "initialSlide": 1,
              "gap": 12
            }
          },
          {
            "breakpoint": 480,
            "settings": {
              "slidesToShow": 1,
              "slidesToScroll": 1,
              "gap": 12
            }
          }
        ]
      }
    };
  },
  computed: mapGetters({}),
  created() {
  },
  methods: {}
};
</script>
