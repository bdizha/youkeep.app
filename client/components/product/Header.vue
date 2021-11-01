<template>
  <a-row>
    <a-col :span="24">
      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
        <a-col :span="24">
          <h4 class="r-heading r-text-white">
            {{ product.name }}
          </h4>
        </a-col>
        <a-col :span="24">
          <p class="r-text-normal r-text-light" v-html="product.summary"></p>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-header',
  props: {
    product: { type: Object, required: false, default: null },
    isShowing: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      quantity: 1
    }
  },
  created () {
  },
  computed: {},
  methods: {
  }
}
</script>
