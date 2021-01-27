<template>
  <div class="r-product-cards" :class="{'r-product-flush': isFlush()}">
    <a-row v-if="hasData" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, 24]" type="flex" justify="start" align="middle">
      <a-col v-for="(product, index) in products" :key="index"
             :xs="{span: isVertical ? 12 : 24}"
             :sm="{span: isVertical ? 12 : 24}" :md="{span: 24 / columns}" :lg="{span: 24 / columns}">
        <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
      </a-col>
      <a-col class="r-hide-lg" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <r-category-shop-now :category="category" justify="center"></r-category-shop-now>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import axios from 'axios'
import {mapGetters} from "vuex";

export default {
  name: 'r-category-products',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 3},
    isVertical: {type: Boolean, required: false, default: true},
    category: {type: Object, required: false},
  },
  data() {
    return {
      hasData: false,
      isProcessing: false,
      products: []
    }
  },
  async fetch() {
    this.hasData = false;
    this.isProcessing = true;

    let params = {
      category_id: this.category.id,
      limit: 12,
      filters: this.filters
    };

    let path = `/products`;
    let $this = this;

    console.log('product path: ', path);

    await axios.post(path, params)
      .then(({data}) => {

        console.log(data.data, '33333');

        $this.products = data.data;
        $this.hasData = true;

        setTimeout(function () {
          $this.isProcessing = false;
        }, 600);
      })
      .catch(e => {
        console.log(e);
      });
  },
  computed: mapGetters({
    processes: "base/processes",
  }),
  methods: {
    isFlush() {
      return Math.floor(Math.random() * Math.floor(2));
    }
  }
};
</script>

