<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse :activeKey="'0'" expandIconPosition="right">
        <a-collapse-panel class="r-collapse-panel"
                          v-for="(category, index) in categories"
                          :key="index"
                          :header="category.name">
          <r-product-products :columns="columns"
                              :is-vertical="isVertical"
                              :type="category.type"
                              :product="product">
          </r-product-products>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

const CATEGORIES = [
  {
    name: 'Related to this product',
    type: 1,
    columns: 1
  },
  {
    name: 'Products bought together',
    type: 2,
    columns: 3,
  },
  {
    name: 'Recommended products',
    type: 3,
    columns: 3,
  }
];

export default {
  name: 'r-product-categories',
  components: {},
  props: {
    product: {type: Object, required: false, default: null},
    columns: {type: Number, required: false, default: 1},
    isVertical: {type: Boolean, required: false, default: true},
    types: {type: Array, required: false, default: [1]},
    limit: {type: Number, required: false, default: 12}
  },
  data() {
    return {
      hasData: false,
      categories: CATEGORIES
    }
  },
  computed: mapGetters({
    processes: "base/processes",
  }),
  created() {
  },
  mounted() {
  },
  methods: {
    async payload() {
    }
  }
};
</script>
