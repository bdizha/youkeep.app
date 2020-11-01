<template>
  <div class="r-slick-thumb">
    <a-carousel dots-class="slick-dots slick-thumb">
      <a slot="customPaging" slot-scope="props">
        <r-avatar shape="square" :size="60" :src="getPhoto(props.i)"/>
      </a>
      <div v-for="photo in product.photos">
        <div class="ant-avatar ant-avatar-square ant-avatar-image"
             :style="styles">
          <r-avatar shape="square" :size="600" :src="photo.image"/>
        </div>
      </div>
    </a-carousel>
  </div>
</template>
<script>
export default {
  name: 'r-product-photos',
  props: {
    product: {type: Object, required: false, default: null},
    size: {type: Number, required: false, default: 140},
  },
  data() {
    return {
      quantity: 1,
      styles: null
    };
  },
  created() {
    this.setStyles();
  },
  computed: {},
  methods: {
    getPhoto(i) {
      return this.product.photos[i].thumb;
    },
    setStyles() {
      let styles = '';
      let suffix = ';';

      if (typeof this.size === 'number') {
        suffix = 'px;';
      }

      styles += 'max-width: ' + this.size + suffix;
      styles += 'max-height: ' + this.size + suffix;
      styles += 'line-height: ' + this.size + suffix;

      this.styles = styles;
    }
  },
};
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
