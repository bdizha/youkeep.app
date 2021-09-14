<template>
  <a-row align="middle" class="r-store-arrows" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <div v-if="hasfarmers" :class="padding" class="r-slider">
        <VueSlickCarousel v-bind="settings">
          <nuxt-link v-for="(store, index) in farmers.data"
                     v-if="store"
                     :key="store.id"
                     :to="store.route"
                     class="r-store-arrow sdaDS"
          >
            <r-store-face :store="store"></r-store-face>
          </nuxt-link>
          <div slot="prevArrow"
               slot-scope="props"
               class="r-slick-arrow r-slick-arrow-prev r-arrow-prev"
          >
            <a-icon type="left"/>
          </div>
          <div slot="nextArrow" slot-scope="props"
               class="r-slick-arrow r-slick-arrow-next r-arrow-next"
          >
            <a-icon type="right"/>
          </div>
        </VueSlickCarousel>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-arrows',
  props: {
    padding: { type: String, required: false, default: '' },
  },
  data () {
    return {
      hasData: false,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        variableWidth: false,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 6,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 560,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 1,
              'dots': false
            }
          }
        ],
      },
    }
  },
  computed: mapGetters({
    farmers: 'base/farmers',
    hasfarmers: 'base/hasfarmers',
  }),
  created () {
    this.payload()
  },
  mounted () {
    this.hasData = true
  },
  methods: {
    payload () {
    }
  }
}
</script>
