<template>
  <a-row class="r-mv-48" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-card>
              <a-card-meta class="r-text-center">
                <template slot="description">
                  <a-row type="flex" justify="center">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                      <h2 class="r-heading r-text-center">
                        What our customers say...
                      </h2>
                      <a-row class="r-slider" type="flex" justify="center" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                          <VueSlickCarousel v-if="hasReviews" v-bind="settings">
                            <a-card v-for="(review, index) in reviews"
                                    :key="index + '-review'">
                              <a-card-meta>
                                <template slot="description">
                                  <h4 class="r-heading">
                                    {{ review.company }}
                                  </h4>
                                  <h4 class="r-heading-light">
                                    {{ review.author }}
                                  </h4>
                                  <p class="r-text-normal">
                                    {{ review.content }}
                                  </p>
                                  <r-rate :rating="review.rating"></r-rate>
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
              </a-card-meta>
            </a-card>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-testimonials',
  props: {},
  data() {
    return {
      settings: {
        slidesToScroll: 1,
        slidesToShow: 3,
        infinite: true,
        dots: false,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 900,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": 2,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 560,
            "settings": {
              "slidesToShow": 1,
              "slidesToScroll": 1,
              "dots": false
            }
          }
        ]
      },
    }
  },
  computed: mapGetters({
    reviews: 'base/reviews',
    processes: 'base/processes',
    hasReviews: "base/hasReviews",
  }),
  created() {
  },
  methods: {}
};
</script>
