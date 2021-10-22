<template>
  <a-row class="r-product-flush" justify="start" type="flex">
    <a-col :span="24" class="r-spin-holder">
      <div class="r-slider">
        <VueSlickCarousel v-if="hasProducts" v-bind="settings">
          <a-card v-for="(product, index) in products.data"
                  :key="index"
                  v-if="product.has_photo"
                  class="r-bg-white"
                  @click="onProduct(product)"
          >
            <div :style="getPhotoCoverStyle(product)" class="r-bg-center">
              <nuxt-img src="/images/icon_blank.svg" width="300px" height="300px"></nuxt-img>
            </div>
            <div class="r-product-body">
              <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }"
                       :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <r-product-header :product="product"></r-product-header>
                </a-col>
                <a-col :lg="{ span: 24 }"
                       :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <r-product-price :product="product"></r-product-price>
                </a-col>
                <a-col :lg="{ span: 24 }"
                       :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <r-product-actions :product="product"></r-product-actions>
                </a-col>
              </a-row>
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
  name: 'r-product-flush',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    size: { type: Number, required: false, default: 480 },
    category: { type: Object, required: false }
  },
  data () {
    return {
      settings: {
        'slidesToShow': 3,
        'slidesToScroll': 1,
        'infinite': true,
        'dots': false,
        'variableWidth': true,
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
    getPhotoCoverStyle (product) {
      return `background-image: url(${product.thumbnail_url});height: 300px; width: 300px;`
    },
    payload () {
    },
    async onProduct (product) {
      const params = {}
      params.route = '/product/' + product.slug
      params.slug = product.slug

      await this.$store.dispatch('base/onProduct', params)
    }
  }
}
</script>
