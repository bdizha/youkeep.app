<template>
  <a-row justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row class="r-slider r-slider-banners">
        <a-col :span="24">
          <VueSlickCarousel v-bind="settings">
            <a-card
              v-for="(cateogry, index) in categories"
              :key="index" hoverable
            >
              <div slot="cover">
                <nuxt-link
                  :to="cateogry.route"
                  style="display: block; width: 100%;"
                >
                  <r-avatar :size="100"
                            :src="cateogry.photo"
                            shape="square"
                            unit="%"
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
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-flush',
  props: {
    size: { type: Number, required: false, default: 24 },
    isShowing: { type: Boolean, required: false, default: false },
    columns: { type: Number, required: false, default: 1 }
  },
  data () {
    return {
      process: 'categories',
      categories: [
        {
          route: '/category/L0000001/beauty',
          photo: '/banners/long/beauty.png'
        },
        {
          route: '/category/L0000001/electronics',
          photo: '/banners/long/electronics.png'
        },
        {
          route: '/category/L0000001/toys',
          photo: '/banners/long/toy.png'
        },
        {
          route: '/category/L0000001/him',
          photo: '/banners/long/him.png'
        },
        {
          route: '/category/L0000001/her',
          photo: '/banners/long/her.png'
        },
        {
          route: '/category/L0000001/shoes',
          photo: '/banners/long/shoes.png'
        }
      ],
      settings: {
        'slidesToShow': this.columns,
        'slidesToScroll': 1,
        'dots': true,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': this.columns,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': this.columns > 2 ? 2 : this.columns,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 560,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          }
        ]
      }
    }
  },
  computed: mapGetters({
    store: 'base/store',
    flush: 'base/flush',
    hasCategories: 'base/hasCategories',
    processes: 'base/processes',
  }),
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    },
    onStoreTray () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
