<template>
  <a-card class="r-bg-dark">
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col v-for="(productValue, index) in product.product_values"
             :key="index"
             :lg="{ span: 6 }" :md="{ span: 9 }"
             :sm="{ span: 15 }"
             :xs="{ span: 24 }">
        <a-row :gutter="[9,9]" justify="start" align="middle" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-light">
              {{ productValue.product_attribute.name }}
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-white">
              {{ productValue.content }}
            </p>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-asset-attributes',
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
