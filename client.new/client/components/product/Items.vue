<template>
  <a-row v-if="category" align="middle" justify="center" type="flex">
    <a-col :span="24">
      <a-carousel :arrows="true"
                  :dots="false"
                  :infinite="false"
                  :responsive="responsive"
                  :slides-to-show="6"
      >
        <r-product-item v-for="(product, index) in category.products"
                        :key="index"
                        :product="product"
        ></r-product-item>
        <div slot="prevArrow"
             slot-scope="props"
             class="r-slick-arrow r-slick-arrow-prev"
        >
          <a-icon type="left"/>
        </div>
        <div slot="nextArrow" slot-scope="props"
             class="r-slick-arrow r-slick-arrow-next"
        >
          <a-icon type="right"/>
        </div>
      </a-carousel>
      <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-items',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 },
    category: { type: Object, required: false, default: null },
  },
  data () {
    return {
      hasData: true,
      isProcessing: true,
      responsive: [
        {
          'breakpoint': 1024,
          'settings': {
            'slidesToShow': 7,
            'slidesToScroll': 1,
            'dots': false
          }
        },
        {
          'breakpoint': 700,
          'settings': {
            'slidesToShow': 4,
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
    }
  },
  mounted () {
    this.payload()
  },
  computed: {},
  methods: {
    payload () {
      let $this = this
      setTimeout(function () {
        $this.isProcessing = false
      }, 300)
    }
  }
}
</script>
