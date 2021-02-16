<template>
  <a-row class="r-mb-24" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <r-product-variants v-for="(productType, index) in productTypes"
                          v-if="productType.is_required"
                          :key="index"
                          :product="product"
                          :item-key="itemKey"
                          :header="productType.name"
                          :product-type="productType"
      ></r-product-variants>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-product-types',
  props: {
    product: { type: Object, required: true, default: null },
    productTypes: { type: Array, required: false, default: [] },
    itemKey: { type: Number, required: false, default: null },
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {},
}
</script>
