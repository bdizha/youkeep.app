<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div :class="padding" class="r-slider">
        <a-carousel v-if="hasStores"
                    :infinite="true"
                    :arrows="true"
                    :dots="false"
                    :slidesToShow="7"
                    :variable-width="true"
                    :responsive="responsive">
          <nuxt-link class="r-slider-item r-text-view-more"
                       v-for="(store, index) in stores.data"
                       :key="store.id"
                       @click.native="onStore(store)"
                       :to="store.route">
            <a-avatar class="r-lazy"
                      shape="circle"
                      :size="36"
                      :data-src="'/storage/store/' + store.photo"
                      src="/assets/icon_default.png"
                      :style="'background-image: url(/storage/store/' + store.photo + ');'"
                      src-placeholder="~/assets/icon_default.png"/>
            <div class="r-text-slider">
              {{ store.name }}
            </div>
          </nuxt-link>
          <div slot="prevArrow"
               slot-scope="props"
               class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
            <a-icon type="caret-left"/>
          </div>
          <div slot="nextArrow" slot-scope="props"
               class="r-slick-arrow r-slick-arrow-next r-arrow-next">
            <a-icon type="caret-right"/>
          </div>
        </a-carousel>
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
      responsive: [
        {
          "breakpoint": 1024,
          "settings": {
            "slidesToShow": 7,
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
