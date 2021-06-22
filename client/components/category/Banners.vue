<template>
  <a-row type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
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
                  <r-avatar shape="square"
                            :size="100"
                            unit="%"
                            :src="cateogry.photo"
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
      <div class="r-mt-48">
        <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex"
               justify="center"
        >
          <a-col
            v-for="(banner, index) in banners"
            :key="index" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 6 }"
            :lg="{span: 6}"
          >
            <a-card hoverable>
              <div slot="cover">
                <nuxt-link
                  :to="banner.route" style="display: block; width: 100%;"
                >
                  <r-avatar shape="square"
                            :size="100"
                            unit="%"
                            :src="banner.photo"
                  />
                </nuxt-link>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-banners',
  props: {
    columns: { type: Number, required: false, default: 1 },
  },
  data () {
    return {
      hasData: false,
      process: 'categories',
      categories: [
        {
          route: '/category/L0000001/beauty',
          photo: '/banners/long/beauty.png',
        },
        {
          route: '/category/L0000001/electronics',
          photo: '/banners/long/electronics.png',
        },
        {
          route: '/category/L0000001/toys',
          photo: '/banners/long/toy.png',
        },
        {
          route: '/category/L0000001/him',
          photo: '/banners/long/him.png',
        },
        {
          route: '/category/L0000001/her',
          photo: '/banners/long/her.png',
        },
        {
          route: '/category/L0000001/shoes',
          photo: '/banners/long/shoes.png',
        },
      ],
      banners: [
        {
          route: '/category/L0000001/popular-products',
          photo: '/banners/mini/100_Percent_Original_Goods.png',
        },
        {
          route: '/category/L0000001/discounts',
          photo: '/banners/mini/Discounts.png',
        },
        {
          route: '/category/L0000001/famous-brands',
          photo: '/banners/mini/Famous_Brands.png',
        },
        {
          route: '/category/L0000001/fast-delivery',
          photo: '/banners/mini/Fast_Delivery.png',
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
      },
    }
  },
  computed: {},
  created () {
    this.payload()
  },
  mounted () {
  },
  methods: {
    async payload () {
    }
  }
}
</script>
