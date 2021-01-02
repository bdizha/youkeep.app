<template>
  <div class="r-banner">
    <VueSlickCarousel v-bind="settings">
      <div class="r-page-header-photo"
           v-for="(category, index) in categories"
           v-if="category.photo"
           :key="index + '-image'">
        <img :src="'/images/' + category.photo"/>
        <div class="r-page-primary"
             :style="{backgroundImage: 'url(' + '/images/' + category.photo + ')'}">
        </div>
      </div>
    </VueSlickCarousel>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-banner',
  props: {},
  data() {
    return {
      settings: {
        "slidesToShow": this.columns,
        "slidesToScroll": 1,
        "arrows": false,
        "dots": true,
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
    }
  },
  computed: mapGetters({
    categories: 'shop/categories',
    processes: 'base/processes',
  }),
  methods: {}
};
</script>
