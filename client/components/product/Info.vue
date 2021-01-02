<template>
  <a-row class="r-tabs" type="flex" justify="start">
    <a-col class="r-text-left" :xs="{ span: 24 }">
      <VueSlickCarousel v-if="links.length > 0" v-bind="settings">
        <div class="r-tab-item"
             v-for="(link, index) in links"
             :key="link.key">
          <a-button block type="secondary"
                    :class="{'r-btn-bordered-grey': link.key !== currentLink, 'r-btn-bordered-primary': link.key === currentLink}"
                    size="large"
                    v-on:click="setTab(link)"
                    html-type="button">
            {{ link.label }}
          </a-button>
        </div>
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
export default {
  name: 'r-product-info',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
      currentLink: 'description',
      links: [
        {label: 'Product Description', key: 'description'},
        {label: 'Reviews', key: 'reviews'},
        {label: 'Delivery & Returns', key: 'delivery-returns'}
      ],
      settings: {
        slidesToScroll: 5,
        infinite: false,
        dots: false,
        variableWidth: true,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 5,
              "dots": false
            }
          },
          {
            "breakpoint": 900,
            "settings": {
              "slidesToShow": 5,
              "slidesToScroll": 5,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": 4,
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
    };
  },
  created() {
  },
  computed: {},
  methods: {
    setTab(link) {
      this.currentLink = link.key;
    }
  },
};
</script>
