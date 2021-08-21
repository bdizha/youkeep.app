<template>
  <a-row class="r-slider" justify="start" style="margin-bottom: 24px;" type="flex">
    <a-col :span="24" class="r-spin-holder">
      <VueSlickCarousel
        v-if="products.length > 0"
        v-bind="settings"
      >
        <r-product-item v-for="(product, index) in products"
                        :key="index"
                        :product="product"
        ></r-product-item>
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
      <r-spinner v-if="processes.isCategory" :is-absolute="true" process="isCategories"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import axios from 'axios'
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-slider',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    category: { type: Object, required: false },
  },
  data () {
    return {
      hasData: false,
      isProcessing: false,
      products: [],
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
              'slidesToShow': 3,
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
  async fetch () {
    this.hasData = false
    this.isProcessing = true

    let params = {
      category_id: this.category.id,
      limit: 24,
      filters: this.filters
    }

    let path = `/products`
    let $this = this

    console.log('product path: ', path)

    await axios.post(path, params)
      .then(({ data }) => {
        $this.products = data.data
        $this.hasData = true
      })
      .catch(e => {
        console.log(e)
      })
  },
  computed: mapGetters({
    processes: 'base/processes',
  }),
  methods: {}
}
</script>
