<template>
  <div class="r-banner">
    <r-product-flush v-if="hasCategories" :columns="1" :category="categories[0]"></r-product-flush>
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
    hasCategories: 'shop/hasCategories',
    processes: 'base/processes',
  }),
  methods: {}
};
</script>
