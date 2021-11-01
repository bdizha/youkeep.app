<template>
  <a-row align="top" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <div class="r-text-normal" v-html="product.description"></div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-description',
  props: {
    product: { type: Object, required: false, default: null }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
