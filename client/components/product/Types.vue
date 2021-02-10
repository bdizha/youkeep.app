<template>
  <a-row class="r-mb-24" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <r-product-variants v-for="(type, index) in types"
                          v-if="type.variants.length > 0"
                          :key="index"
                          :header="type.name"
                          :product-type="type"></r-product-variants>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-product-types',
  props: {
    types: { type: Array, required: false, default: [] },
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
