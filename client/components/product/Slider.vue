<template>
  <a-row class="r-slider" justify="start" type="flex">
    <a-col :span="24" class="r-spin-holder">
      <VueSlickCarousel
        v-if="hasData > 0"
        v-bind="settings"
      >
        <r-product-item :is-drop="isDrop" v-for="(product, index) in products"
                        :key="index"
                        :product="product"
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
      <r-spinner v-if="isProcessing" :is-absolute="true" process="isCategories"/>
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
    isDrop: { type: Boolean, required: false, default: false },
    columns: { type: Number, required: false, default: 3 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          metric_type_id: null,
          store_id: null,
          is_active: true,
          order_by: 'updated_at'
        }
      }
    }
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

    const path = `/products`
    const $this = this

    console.log('service path: ', path)

    await axios.post(path, this.filters)
      .then(({ data }) => {
        $this.products = data.data
        $this.hasData = true
        $this.isProcessing = false
      })
      .catch((e) => {
        console.log(e)
      })
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  methods: {}
}
</script>
