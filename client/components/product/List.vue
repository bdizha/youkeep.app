<template>
  <a-row type="flex" justify="center">
    <a-col class="r-p-24" :span="24">
      <r-product-paginate :category="category"></r-product-paginate>
      <div v-if="hasProducts" class="r-product-cards">
        <a-row type="flex" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]">
          <a-col :class="{'r-spin__active' :processes.isProduct}"
                 v-for="(product, index) in products.data"
                 :key="index"
                 :xs="{span: 12}"
                 :sm="{span: 12}" :md="{span: 6}" :lg="{span: 4}">
            <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
          </a-col>
        </a-row>
      </div>
      <r-product-paginate :category="category"></r-product-paginate>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

const SORTS = [
  {
    label: 'Name: A to Z',
    key: 0
  },
  {
    label: 'Name: Z to A',
    key: 1
  },
  {
    label: 'Price: Low to High',
    key: 2
  },
  {
    label: 'Price: High to Low',
    key: 3
  },
  {
    label: 'Most Recent',
    key: 4
  }
];
export default {
  name: 'r-product-list',
  components: {},
  props: {
    category: {
      type: Object, required: true, default: () => {
        id: null
      }
    },
    isVertical: {type: Boolean, required: false, default: true},
  },
  data() {
    return {}
  },
  computed: mapGetters({
    hasProducts: 'base/hasProducts',
    products: 'base/products',
    processes: 'base/processes',
  }),
  created() {
  },
  methods: {}
};
</script>
