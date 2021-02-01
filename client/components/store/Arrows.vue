<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div :class="padding" class="r-slider">
        <VueSlickCarousel v-if="hasStores" v-bind="settings">
          <nuxt-link class="r-store-arrow" v-for="(store, index) in stores.data"
                     :key="store.id"
                     @click.native="onStore(store)"
                     :to="store.route">
            <a-card class="r-store-card"
                    :style="'background-image: url(' + store.photo_cover_url + ');'">
              <a-card-meta>
                <template slot="description">
                  <a-row type="flex" justify="center" align="middle">
                    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <dev class="r-store-arrow-cover">
                        <a-avatar class="r-lazy"
                                  shape="square"
                                  :size="120"
                                  :src="store.photo_url"
                                  :style="'background-image: url(' + store.photo_url + ');'"
                                  src-placeholder="~/assets/icon_default.png"/>
                      </dev>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <r-store-meta :store="store"></r-store-meta>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <a-button
                        block
                        class="r-btn-primary"
                        size="default"
                        type="secondary">
                        Follow
                      </a-button>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </nuxt-link>
          <div slot="prevArrow"
               slot-scope="props"
               class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
            <a-icon type="left"/>
          </div>
          <div slot="nextArrow" slot-scope="props"
               class="r-slick-arrow r-slick-arrow-next r-arrow-next">
            <a-icon type="right"/>
          </div>
        </VueSlickCarousel>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-arrows',
  props: {
    padding: {type: String, required: false, default: ''},
  },
  data() {
    return {
      hasData: false,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        variableWidth: false,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 6,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": 4,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 560,
            "settings": {
              "slidesToShow": 2,
              "slidesToScroll": 1,
              "dots": false
            }
          }
        ],
      },
    };
  },
  computed: mapGetters({
    stores: "base/stores",
    hasStores: "base/hasStores",
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
    onStore(store) {
      this.$store.dispatch('shop/onStore', store.route);
    },
  }
};
</script>
