<template>
  <VueSlickCarousel v-bind="settings">
    <div class="r-page-header-photo"
         v-for="(image, index) in images"
         :key="index + '-image'">
      <img :src="'/images/' + image"/>
      <div class="r-page-primary"
           :style="{backgroundImage: 'url(' + '/images/' + image + ')'}">
      </div>
    </div>
  </VueSlickCarousel>
</template>
<script>
export default {
  name: 'r-slider',
  props: {
    images: {type: Array, required: false, default: []},
  },
  data() {
    return {
      settings: {
        "slidesToShow": this.columns,
        "slidesToScroll": 1,
        "arrows": false,
        "dots": true,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": this.columns,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": this.columns > 2 ? 2 : this.columns,
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
  methods: {}
};
</script>
