<template>
  <a-row class="r-margin-bottom-24" type="flex" justify="start">
    <a-col class="gutter-row" :span="24">
      <template v-for="productType in product.types"
                v-if="productType.has_variants">
        <a-row :key="productType.label"
               class="r-filter-item" type="flex" justify="start">
          <a-col class="gutter-row" :span="24">
            <div class="r-text-capitalize">
              {{ productType.label }}
            </div>
          </a-col>
        </a-row>
        <a-row :gutter="[12,12]" class="r-filter-item" type="flex" justify="start">
          <a-col v-for="variant in productType.variants"
                 :key="variant.id" class="gutter-row" :span="6">
            <div class="r-product-type">
              {{ variant.label }}
            </div>
          </a-col>
        </a-row>
      </template>
    </a-col>
  </a-row>
</template>
<script>
const COLORS = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];

export default {
  name: 'r-product-types',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
      currentColor: null,
      currentSize: null,
      colors: [
        {'label': 'Red', 'id': 1},
        {'label': 'White', 'id': 2},
      ],
      size: null,
      sizes: [
        {'label': 'S', 'id': 1},
        {'label': 'M', 'id': 2},
      ],
    };
  },
  created() {
  },
  computed: {},
  methods: {},
};
</script>
