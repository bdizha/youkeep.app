<template>
  <a-row :class="{'r-show-product-spin__active' :processes.isProduct}" v-if="hasProducts"
         class="r-product-flush r-slider" type="flex" justify="start">
    <a-col class="r-spin-holder r-p-24" :span="24">
      <VueSlickCarousel v-bind="settings">
        <r-product-item v-for="(product, index) in products.data" :key="index"
                        :product="product"></r-product-item>
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
  name: 'r-product-flush',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 3},
    category: {type: Object, required: false},
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
              "slidesToShow": this.columns / 3,
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
    }
  },
  computed: mapGetters({
    products: 'shop/products',
    hasProducts: 'base/hasProducts',
    processes: 'base/processes',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
