<template>
  <a-row :gutter="[24,24]" class="r-slider" justify="start" type="flex">
    <a-col v-if="title" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" justify="space-between" type="flex">
        <a-col flex="1 1 0">
          <h4 class="r-heading r-text-white">
            {{ title }}
          </h4>
        </a-col>
        <a-col>
          <nuxt-link :to="route">
            <a-button size="small"
                      block
                      class="r-btn-bordered-tertiary"
                      type="secondary"
            >
              See all
              <a-icon type="right"/>
            </a-button>
          </nuxt-link>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="hasProducts"
           :span="24"
           class="r-spin-holder"
    >
      <VueSlickCarousel
        v-bind="settings"
      >
        <r-asset-item :is-drop="isDrop"
                      :is-featured="isFeatured"
                      v-for="(product, index) in products"
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
  name: 'r-asset-slider',
  components: {},
  props: {
    title: { type: String, required: false, default: null },
    route: { type: String, required: false, default: null },
    isDrop: { type: Boolean, required: false, default: false },
    isFeatured: { type: Boolean, required: false, default: false },
    columns: { type: Number, required: false, default: 3 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          event_type: null,
          store_id: null,
          is_active: true,
          order_by: 'updated_at'
        }
      }
    }
  },
  data () {
    return {
      hasProducts: false,
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
    this.hasProducts = false
    this.isProcessing = true

    const path = `/products`
    const $this = this

    console.log('service path: ', path)

    await axios.post(path, this.filters)
      .then(({ data }) => {
        $this.products = data.data
        $this.hasProducts = true
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
