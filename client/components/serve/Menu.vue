<template>
  <a-row align="middle" class="r-slider" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-store-slider ">
      <r-serve-item v-for="(serve, index) in serves"
                             :key="index"
                             :category="serve"
      >
      </r-serve-item>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-category-slider',
  props: {
    columns: { type: Number, required: false, default: 12 },
    category: { type: Object, required: false, default: null },
    title: { type: String, required: false, default: null }
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
  methods: {}
}
</script>
