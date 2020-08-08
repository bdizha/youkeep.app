<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="r-store-slider gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div v-if="hasStores" :class="padding">
        <VueSlickCarousel v-bind="settings">
          <router-link @click.native="onStore(store)"
                       class="r-text-view-more"
                       v-for="(store, index) in stores.data"
                       :key="store.id"
                       :to="store.route">
            <a-card hoverable class="r-store-slider-item"
                    :style="{backgroundImage: 'url(/storage/store/' + store.photo_cover + ')'}">
              <a-avatar slot="cover" shape="square"
                        :size="160"
                        :src="'/storage/store/' + store.photo"
                        src-placeholder="~/assets/icon.svg">
                <div class="r-store-frame"></div>
              </a-avatar>
              <a-card-meta>
                <template slot="title">
                  <a-button @click="onModal('register')"
                            block
                            class="r-btn-bordered-primary"
                            type="primary">
                    {{ store.name }}
                  </a-button>
                  <div class="r-slider-item-tag">
                    {{ store.description }}
                  </div>
                </template>
              </a-card-meta>
            </a-card>
          </router-link>
        </VueSlickCarousel>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-slider',
  props: {
    padding: {type: String, required: false, default: null}
  },
  data() {
    return {
      settings: {
        "slidesToShow": 4,
        "slidesToScroll": 3,
        "infinite": true,
        "dots": false,
        "variableWidth": true,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 4,
              "slidesToScroll": 3,
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
              "initialSlide": 2,
              "gap": 24
            }
          },
          {
            "breakpoint": 480,
            "settings": {
              "slidesToShow": 1,
              "slidesToScroll": 1,
              "gap": 24
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
