<template>
  <div :class="'r-testimonials'">
    <a-row type="flex" justify="center" :gutter="16">
      <a-col class="gutter-row" :xs="{ span: 24 }" :md="{ span: 18 }" :lg="{ span: 12 }">
        <h2 class="r-heading r-text-secondary  text-center">
          What our customers say
        </h2>
        <VueSlickCarousel v-if="testimonials.length > 0" v-bind="settings">
          <div class="r-testimonial">
            <img class="r-testimonial-photo"
                 :src="'/images/Shopple/testimonials/0' + index + '.jpg'"
                 style="opacity: 1;"
            >
            <h4 class="r-heading">
              {{ testimonial.content }}
            </h4>
            <p class="r-text-light">
              {{ testimonial.author }}
            </p>
          </div>
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
  </div>
</template>
<script>
export default {
  props: {
    testimonials: { type: Array, required: true }
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
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
