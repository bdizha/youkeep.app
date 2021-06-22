<template>
  <div class="r-product-cards">
    <VueSlickCarousel v-if="hasData" v-bind="settings">
      <r-product-item v-for="(product, index) in products.data"
                      :isVertical="false"
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
  </div>
</template>
<script>
import { mapGetters } from 'vuex'
import axios from 'axios'

export default {
  name: 'r-banner',
  props: {
    category: { type: Object, required: true },
    columns: { type: Number, required: false, default: 3 },
  },
  computed: mapGetters({
    store: 'base/store',
    filters: 'shop/filters',
    processes: 'base/processes',
  }),
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
              'slidesToShow': 1,
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
      limit: 6,
      filters: this.filters
    }

    let path = `/products`
    let $this = this

    console.log('product path: ', path)

    await axios.post(path, params)
      .then(({ data }) => {

        console.log(data.data, '>>>>>>')

        $this.products = data.data
        $this.hasData = true

        setTimeout(function () {
          $this.isProcessing = false
        }, 600)
      })
      .catch(e => {
        console.log(e)
      })
  },
  methods: {}
}
</script>
