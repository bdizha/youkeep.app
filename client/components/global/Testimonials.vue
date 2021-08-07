<template>
  <a-row :gutter="[24,24]" align="middle" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 20 }" :md="{ span: 20 }" :sm="{ span: 24 }" :xs="{ span: 24}">
      <h3 class="r-heading-light r-text-secondary">
        What our customers say...
      </h3>
    </a-col>
    <a-col :lg="{ span: 4}" :md="{ span: 4 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-right"
    >
      <nuxt-link to="/testimonials">
        <a-button block
                  class="r-btn-primary"
                  size="large"
                  type="secondary"
        >
          Explore More
          <a-icon type="right"/>
        </a-button>
      </nuxt-link>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" class="r-slider r-slider-testimonials" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <VueSlickCarousel v-if="hasReviews" v-bind="settings">
            <a-card v-for="(review, index) in reviews" :key="index + '-review'"
                    class="r-bg-primary-light"
            >
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading r-text-secondary">
                    {{ review.author }}
                  </h4>
                  <p class="r-text-normal">
                    {{ review.content }}
                  </p>
                  <r-rate :rating="review.rating"></r-rate>
                  <h4 class="r-heading-light">
                    {{ review.company }}
                  </h4>
                </template>
              </a-card-meta>
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
  name: 'r-testimonials',
  props: {},
  data () {
    return {
      settings: {
        slidesToScroll: 2,
        slidesToShow: 2,
        dots: false,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 2,
              'dots': false
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 2,
              'dots': false
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': 1,
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
  computed: mapGetters({
    reviews: 'base/reviews',
    processes: 'base/processes',
    hasReviews: 'base/hasReviews',
  }),
  created () {
  },
  methods: {}
}
</script>
