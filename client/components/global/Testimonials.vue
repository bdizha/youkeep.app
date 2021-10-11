<template>
  <a-row :gutter="[24,24]" align="middle" justify="center"
         type="flex"
  >
    <a-col class="r-text-center" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}">
      <h2 class="r-heading">
        What our customers say...
      </h2>
    </a-col>
    <a-col v-if="hasTestimonials" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" class="r-slider r-slider-testimonials" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <VueSlickCarousel v-bind="settings">
            <a-card v-for="(testimonial, index) in testimonials"
                    :key="index"
                    class="r-bg-primary-secondary"
            >
                <a-row :gutter="[12,12]" align="middle" justify="space-between"
                       type="flex"
                >
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                    <nuxt-img src="/images/quote.svg" width="45px"></nuxt-img>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                    <div :style="{height: '240px'}">
                    <h4 class="r-heading-light r-text-dark">
                      {{ testimonial.content }}
                    </h4>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                    <a-row :gutter="[12,12]" align="middle" type="flex">
                      <a-col flex="48px">
                        <div class="r-bg-primary r-p-12 r-border-circle">
                          <nuxt-img src="/images/icon_secondary.svg" width="30px"></nuxt-img>
                        </div>
                      </a-col>
                      <a-col flex="auto">
                        <h4 class="r-heading-bold r-text-uppercase">
                          {{ testimonial.author }}
                        </h4>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
            </a-card>
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
  async serverPrefetch () {
    await this.$store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      settings: {
        slidesToScroll: 3,
        slidesToShow: 3,
        dots: true,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 3,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 1,
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
      }
    }
  },
  computed: mapGetters({
    testimonials: 'content/testimonials',
    processes: 'base/processes',
    hasTestimonials: 'content/hasTestimonials'
  }),
  created () {
  },
  methods: {}
}
</script>
