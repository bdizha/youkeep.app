<template>
  <div class="r-slider">
    <VueSlickCarousel v-bind="settings">
      <div v-for="(photo, index) in product.photos"
           :key="index"
           :product="product"
           class="ant-avatar ant-avatar-square ant-avatar-image"
      >
        <r-avatar shape="square"
                  :size="600"
                  :src="photo.image"
        />
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
  </div>
</template>
<script>
export default {
  name: 'r-product-photos',
  props: {
    product: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 140 },
  },
  data () {
    return {
      quantity: 1,
      styles: null,
      settings: {
        'slidesToShow': 1,
        'slidesToScroll': 1,
        'infinite': true,
        'dots': false
      }
    }
  },
  created () {
    this.setStyles()
  },
  computed: {},
  methods: {
    getPhoto (i) {
      return this.product.photos[i].thumb
    },
    setStyles () {
      let styles = ''
      let suffix = ';'

      if (typeof this.size === 'number') {
        suffix = 'px;'
      }

      styles += 'max-width: ' + this.size + suffix
      styles += 'max-height: ' + this.size + suffix
      styles += 'line-height: ' + this.size + suffix

      this.styles = styles
    }
  },
}
</script>
<style scoped>
/* For demo */
.ant-carousel >>> .slick-dots {
  height: auto;
}

.ant-carousel >>> .slick-slide img {
  border: 5px solid #fff;
  display: block;
  margin: auto;
  max-width: 100%;
}

.ant-carousel >>> .slick-thumb li {
  width: 64px;
  height: 64px;
  margin: 0 6px 12px;
}

.ant-carousel >>> .slick-thumb li img {
  width: 100%;
  height: 100%;
  filter: grayscale(100%);
}

.ant-carousel >>> .slick-thumb li.slick-active img {
  filter: grayscale(0%);
}
</style>
