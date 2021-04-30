<template>
  <a-row class="r-slider" type="flex" justify="center" align="middle">
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <VueSlickCarousel v-if="hasCategories" v-bind="settings">
        <NuxtLink  :prefetch="true" class="r-slider-item r-text-view-more"
                   :class="'r-slider-item-' + size"
                   v-for="(category, index) in categories"
                   :key="category.id"
                   :to="category.route"
        >
          <r-avatar shape="circle"
                    :size="size"
                    :src="category.photo"
                    :style="'background-image: url(' + category.photo + ');'"
          >
          </r-avatar>
          <div class="r-text-slider">
            {{ category.name }}
          </div>
        </NuxtLink>
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
    size: { type: Number, required: false, default: 36 },
  },
  data () {
    return {
      settings: {
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        variableWidth: true,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': this.columns,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 5,
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
    categories: 'base/categories',
    hasCategories: 'base/hasCategories',
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    },
  }
}
</script>
