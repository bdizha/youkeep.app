<template>
  <a-row class="r-mb-24" type="flex" justify="start">
    <a-col :span="24">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(filter, index) in filters"
                          :key="index"
                          class="r-category-menu-panel" :header="filter.label">
          <r-category-filter-color></r-category-filter-color>
          <r-category-filter-size></r-category-filter-size>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>

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
      filters: [
        {'label': 'Color', 'key': 'color'},
        {'label': 'Size', 'key': 'size'},
      ]
    };
  },
  created() {
  },
  computed: {},
  methods: {},
};
</script>
