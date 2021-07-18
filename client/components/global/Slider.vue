<template>
  <VueSlickCarousel v-bind="settings">
    <div v-for="(image, index) in images"
         :key="index + '-image'"
         class="r-page-header-photo"
    >
      <img :src="'/assets/' + image"/>
      <div :style="{backgroundImage: 'url(' + '/assets/' + image + ')'}"
           class="r-page-white"
      >
      </div>
    </div>
  </VueSlickCarousel>
</template>
<script>
export default {
  name: 'r-slider',
  props: {
    images: { type: Array, required: false, default: [] },
  },
  data () {
    return {
      settings: {
        'slidesToShow': this.columns,
        'slidesToScroll': 1,
        'arrows': false,
        'dots': true,
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
            'breakpoint': 700,
            'settings': {
              'slidesToShow': this.columns > 2 ? 2 : this.columns,
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
  methods: {}
}
</script>
