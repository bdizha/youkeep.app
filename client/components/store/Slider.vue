<template>
  <a-row class="r-slider" type="flex" justify="center" align="middle">
    <a-col class="r-store-slider gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[24,24]" class="r-margin-bottom-24" type="flex" justify="start">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
               :lg="{ span: 20 }">
          <h3 class="r-heading">
            {{ title }}
          </h3>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 4 }"
               :lg="{ span: 4 }">
          <r-store-shop-now justify="end"></r-store-shop-now>
        </a-col>
      </a-row>
      <VueSlickCarousel v-if="hasStores" v-bind="settings">
        <nuxt-link class="r-text-view-more"
                   v-for="(store, index) in stores.data"
                   :key="store.id"
                   :to="store.route">
          <a-card hoverable class="r-store-slider-item"
                  :style="{backgroundImage: 'url(' + store.photo_cover_url + ')'}">
            <r-avatar slot="cover"
                      shape="circle"
                      :size="120"
                      :src="store.photo_url">
              <div class="r-store-frame"></div>
            </r-avatar>
            <a-card-meta>
              <template slot="title">
                <div class="r-store-actions">
                  <a-button block
                            class="r-btn-bordered-grey"
                            type="primary">
                    {{ store.name }}
                  </a-button>
                </div>
                <div class="r-slider-item-tag">
                  {{ store.description }}
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </nuxt-link>
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
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-slider',
  props: {
    columns: {type: Number, required: false, default: 6},
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
  computed: mapGetters({
    stores: 'base/stores',
    hasStores: 'base/hasStores',
  }),
  created() {
  },
  methods: {
    onStoreTray(event) {
      event.preventDefault();

      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'store';

      this.$store.dispatch('base/onModal', modal);
    },
    onStore(store) {
      this.$store.dispatch('shop/onStore', store.route);
    },
  },
  watch: {
    openKeys(val) {
      console.log('openKeys', val);
    },
  },
};
</script>
