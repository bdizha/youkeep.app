<template>
  <a-row class="r-product-flush" justify="start" type="flex"
  >
    <a-col :span="24">
      <div class="r-slider">
        <VueSlickCarousel v-bind="settings">
          <r-avatar v-for="(photo, index) in store.photos"
                    :key="index"
                    :size="300"
                    :src="photo"
                    shape="square"
          />
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
  name: 'r-store-photos',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    store: {
      type: Object, required: false, defaut: () => {
      }
    }
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
    products: 'base/products',
    hasProducts: 'base/hasProducts',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
