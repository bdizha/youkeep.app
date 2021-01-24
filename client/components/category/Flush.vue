<template>
  <a-row type="flex" justify="center">
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row v-if="hasCategories" type="flex" justify="center">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: size }">
          <a-row :gutter="[24,24]" class="r-mb-24" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                   :lg="{ span: 20 }">
              <h3 class="r-heading-light">
                It's shopping time
              </h3>
            </a-col>
            <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 4 }"
                   :lg="{ span: 4 }">
              <r-category-shop-now :category="flush.category" justify="end"></r-category-shop-now>
            </a-col>
          </a-row>
          <a-row :class="{'r-is-empty': processes.isCategories}" class="r-store-items">
            <a-col :span="24">
              <a-carousel :infinite="false"
                          :slides-to-show="3"
                          :arrows="true"
                          :dots="false"
                          :responsive="responsive">
                <div slot="prevArrow"
                     slot-scope="props"
                     class="r-slick-arrow r-slick-arrow-prev">
                  <a-icon type="left"/>
                </div>
                <div slot="nextArrow" slot-scope="props"
                     class="r-slick-arrow r-slick-arrow-next">
                  <a-icon type="right"/>
                </div>
                <r-category-bundle
                  v-for="(category, index) in flush.categories"
                  :key="index" style="display: block; width: 100%;"
                  :category="category"></r-category-bundle>
              </a-carousel>
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
  name: 'r-category-flush',
  props: {
    size: {type: Number, required: false, default: 24},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      responsive: [
        {
          "breakpoint": 1024,
          "settings": {
            "slidesToShow": 3,
            "slidesToScroll": 3,
            "dots": false
          }
        },
        {
          "breakpoint": 700,
          "settings": {
            "slidesToShow": 2,
            "slidesToScroll": 2,
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
    };
  },
  computed: mapGetters({
    store: 'shop/store',
    flush: "base/flush",
    hasCategories: "base/hasCategories",
    processes: "base/processes",
  }),
  created() {
    this.payload();
  },
  methods: {
    async payload() {
    },
    onStoreTray() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'store';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
