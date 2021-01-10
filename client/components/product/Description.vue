<template>
  <a-row type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      Some description will come here {{ product.descriptionsss }}
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-description',
  props: {
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
    };
  },
  created() {
  },
  computed: {
  },
  methods: {},
};
</script>
