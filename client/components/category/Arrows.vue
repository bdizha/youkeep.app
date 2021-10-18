<template>
  <a-row align="middle" class="r-slider" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-">
      <VueSlickCarousel v-if="hasCategories" v-bind="settings">
        <nuxt-link v-for="(category, index) in categories"
                   :key="index"
                   :to="category.route"
                   class="r-text-view-more"
                   :class="{'r-slider-item': hasPhoto}"
        >
          <a-card class="r-bg-white">
            <r-avatar v-if="hasPhoto"
                      :size="size"
                      :src="category.photo"
                      :style="'background-image: url(' + category.photo + ');'"
                      shape="circle"
            >
            </r-avatar>
            <h4 class="r-text-slider">
              {{ category.name }}
            </h4>
          </a-card>
        </nuxt-link>
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
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-arrows',
  props: {
    columns: { type: Number, required: false, default: 8 },
    size: { type: Number, required: false, default: 72 },
    hasPhoto: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      settings: {
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        variableWidth: true,
        'gap': 12,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': this.columns,
              'slidesToScroll': 1,
              'dots': false,
              'gap': 12
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 5,
              'slidesToScroll': 1,
              'dots': false,
              'gap': 12
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': 4,
              'slidesToScroll': 1,
              'dots': false,
              'gap': 12
            }
          },
          {
            'breakpoint': 560,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false,
              'gap': 12
            }
          }
        ]
      }
    }
  },
  computed: mapGetters({
    categories: 'base/categories',
    hasCategories: 'base/hasCategories'
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
