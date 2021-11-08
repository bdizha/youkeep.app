<template>
  <a-row align="middle" class="r-slider" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-store-slider ">
      <VueSlickCarousel v-if="hasServes" v-bind="settings">
        <r-serve-item v-for="(serve, index) in serves"
                            :key="index"
                            :serve="serve"
        >
        </r-serve-item>
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
  name: 'r-serve-slider',
  props: {
    columns: { type: Number, required: false, default: 12 },
    serve: { type: Object, required: false, default: null },
    title: { type: String, required: false, default: null },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          is_active: true
        }
      }
    }
  },
  async fetch () {
    await this.onServes()
  },
  data () {
    return {
      settings: {
        'infinite': true,
        'slidesToShow': 1,
        'slidesToScroll': 3,
        'variableWidth': true,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 3,
              'infinite': true,
              'dots': false,
              'gap': 24
            }
          },
          {
            'breakpoint': 600,
            'settings': {
              'slidesToShow': 1,
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
  computed: mapGetters({
    serves: 'content/serves',
    hasServes: 'content/hasServes'
  }),
  created () {
  },
  methods: {
    async onServes () {
      await this.$store.dispatch('content/onServes', this.filters)
    }
  }
}
</script>
