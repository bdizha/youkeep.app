<template>
  <a-row class="r-slider" type="flex" justify="start" style="margin-bottom: 24px;">
    <a-col class="gutter-row r-spin-holder" :span="24">
      <VueSlickCarousel
        v-bind="settings"
        v-if="products.length > 0">
        <r-product-item v-for="(product, index) in products"
                        :key="index"
                        :product="product"></r-product-item>
        <template #prevArrow="arrowOption">
          <div class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
            <a-icon type="caret-left"/>
          </div>
        </template>
        <template #nextArrow="arrowOption">
          <div class="r-slick-arrow r-slick-arrow-next r-arrow-next">
            <a-icon type="caret-right"/>
          </div>
        </template>
      </VueSlickCarousel>
      <r-spinner :is-absolute="true" v-if="processes.isCategory"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import axios from 'axios'
import {mapGetters} from "vuex";

export default {
  name: 'r-product-slider',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6},
    category: {type: Object, required: false},
  },
  data() {
    return {
      hasData: false,
      isProcessing: false,
      products: [],
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
    }
  },
  computed: mapGetters({
    processes: "base/processes",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
      console.log('do you have category: ', this.category.name);
      console.log('do you have products: ', this.category.products);

      if (this.category.products.length > 0) {
        this.products = this.category.products;
        return;
      }

      this.hasData = false;
      this.isProcessing = true;

      let params = {
        category_id: this.category.id,
        limit: 9,
        filters: this.filters
      };

      let path = `/products`;
      let $this = this;

      console.log('do you have path: ', path);

      axios.post(path, params)
        .then(({data}) => {
          $this.products = data.data;
          $this.hasData = true;

          setTimeout(function () {
            $this.isProcessing = false;
          }, 600);
        })
        .catch(e => {
          console.log(e);
        });
    }
  }
};
</script>
