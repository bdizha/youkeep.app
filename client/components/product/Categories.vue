<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(category, index) in categories"
                          :key="category.type + '-category'"
                          class="r-category-menu-panel" :header="category.name">
          <r-product-related :product="product"></r-product-related>
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
  },
  {
    name: 'Products bought together',
    type: 2,
  },
  {
    name: 'Recommended products',
    type: 3,
  }
];

export default {
  name: 'r-product-categories',
  components: {},
  props: {
    product: {type: Object, required: false, default: null},
    columns: {type: Number, required: false, default: 3},
    isVertical: {type: Boolean, required: false, default: true},
    isFlush: {type: Boolean, required: false, default: false},
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
