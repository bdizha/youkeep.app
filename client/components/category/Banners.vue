<template>
  <a-row class="r-banner-flush" justify="start" type="flex"
  >
    <a-col :span="24" class="r-spin-holder">
      <div v-if="hasBanners" class="r-slider">
        <VueSlickCarousel v-bind="settings">
          <a-card v-for="(banner, index) in banners" :key="index"
                  class="r-banner" hoverable
          >
            <div slot="cover">
              <nuxt-link :to="banner.route"
                         style="display: block; width: 100%;"
              >
                <r-avatar :dataSrc="banner.photo_url"
                          :size="size"
                          shape="square"
                />
              </nuxt-link>
            </div>
          </a-card>
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
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-banners',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    size: { type: Number, required: false, default: 300 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          has_banners: true,
          order_by: 'updated_at'
        }
      }
    }
  },
  async fetch () {
    await this.onBanners()
  },
  data () {
    return {
      settings: {
        'slidesToShow': this.columns,
        'slidesToScroll': 1,
        'infinite': true,
        'dots': false,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': this.columns,
              'slidesToScroll': 1,
              'infinite': true,
              'dots': false,
              'gap': 24
            }
          },
          {
            'breakpoint': 600,
            'settings': {
              'slidesToShow': this.columns / 3,
              'slidesToScroll': 1,
              'initialSlide': 1,
              'gap': 12
            }
          },
          {
            'breakpoint': 480,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'gap': 12
            }
          }
        ]
      }
    }
  },
  computed: mapGetters({
    banners: 'base/banners',
    hasBanners: 'base/hasBanners'
  }),
  methods: {
    async onBanners () {
      await this.$store.dispatch('base/onBanners', this.filters)
    }
  }
}
</script>
