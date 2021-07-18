<template>
  <a-row align="middle" class="r-mb-24" justify="start" type="flex">
    <a-col :span="24">
      <r-product-variants v-for="(productType, index) in productTypes"
                          v-if="productType.is_required"
                          :key="index"
                          :header="productType.name"
                          :item-key="itemKey"
                          :product="product"
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
