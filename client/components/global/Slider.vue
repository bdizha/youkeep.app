<template>
  <VueSlickCarousel v-bind="settings">
    <r-avatar v-for="(image, index) in images"
              :key="index"
              :data-src="image" :size="300"
              class="r-avatar-block"
    ></r-avatar>
  </VueSlickCarousel>
</template>
<script>
export default {
  name: 'r-slider',
  props: {
    images: {
      type: Array, required: false, default: () => {
      }
    },
    dots: { type: Boolean, required: false, default: () => false }
  },
  data () {
    return {
      settings: {
        'slidesToShow': 1,
        'slidesToScroll': 1,
        'arrows': false,
        'dots': false,
        'autoplay': true,
        'false': true,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 1,
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
  methods: {}
}
</script>
