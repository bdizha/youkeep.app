<template>
  <VueSlickCarousel v-bind="settings">
    <div v-for="(image, index) in images"
         :key="index">
      <r-avatar :data-src="image" :size="300"
                class="r-avatar-block"
      ></r-avatar>
    </div>
  </VueSlickCarousel>
</template>
<script>
export default {
  name: 'r-slider',
  props: {
    images: { type: Array, required: false, default: () => {} }
  },
  data () {
    return {
      settings: {
        'slidesToShow': 1,
        'slidesToScroll': 1,
        'arrows': false,
        'dots': true,
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
