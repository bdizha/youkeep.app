<template>
  <a-row class="r-bg-grey r-reviews" type="flex" justify="center">
    <a-col class="gutter-row r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-mt-24" type="flex" justify="center">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <h2 class="r-heading r-text-center">
            What our customers say
          </h2>
        </a-col>
      </a-row>
      <a-carousel class="r-mb-48" v-if="testimonials.length > 0" :infinite="true"
                  :arrows="true"
                  :dots="false"
                  :slidesToShow="1"
                  :variable-width="true"
                  :responsive="responsive">
        <a-card class="r-card-review" v-for="(testimonial, index) in testimonials"
                :key="index">
          <div slot="cover"
               :style="'background-image: url(/images/testimonials/0' + (index + 1) + '.png)'">
          </div>
          <a-card-meta>
            <template slot="description">
              <h3 class="r-heading-review">
                <span class="r-review-quote">&quot;</span>
                {{ testimonial.content }}
                <span class="r-review-quote">&quot;</span>
              </h3>
              <h4 class="r-heading-light">
                {{ testimonial.author }}
              </h4>
              <p class="r-text-light">
                {{ testimonial.company }}
              </p>
              <div class="r-article-slogan">
                <a-icon slot="prefix" type="star"/>
                <a-icon slot="prefix" type="star"/>
                <a-icon slot="prefix" type="star"/>
              </div>
            </template>
          </a-card-meta>
        </a-card>
        <div slot="prevArrow"
             slot-scope="props"
             class="r-slick-arrow r-slick-arrow-prev">
          <a-icon type="caret-left"/>
        </div>
        <div slot="nextArrow" slot-scope="props"
             class="r-slick-arrow r-slick-arrow-next">
          <a-icon type="right"/>
        </div>
      </a-carousel>
      <r-spinner process="isFetching"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-testimonials',
  components: {},
  props: {},
  data() {
    return {
      responsive: [
        {
          "breakpoint": 1024,
          "settings": {
            "slidesToShow": 3,
            "slidesToScroll": 1,
            "infinite": true,
            "dots": false,
            "gap": 24
          }
        },
        {
          "breakpoint": 600,
          "settings": {
            "slidesToShow": 2,
            "slidesToScroll": 1,
            "infinite": true,
            "dots": false,
            "gap": 24
          }
        },
        {
          "breakpoint": 480,
          "settings": {
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "infinite": true,
            "dots": false,
            "gap": 24
          }
        }
      ],
    }
  },
  computed: mapGetters({
    testimonials: 'base/testimonials',
    processes: 'base/processes',
  }),
  created() {
    this.payload();
  },
  methods: {
    async payload() {
      await this.$store.dispatch('base/onTestimonials', {});
    }
  }
};
</script>
