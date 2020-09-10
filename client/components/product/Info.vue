<template>
  <a-tabs class="r-mv-48" type="card" @change="callback">
    <a-tab-pane key="1" tab="Details">
      <div :data-descrption="product.description">Not set</div>
    </a-tab-pane>
    <a-tab-pane key="2" tab="Delvery & returns">
      Not set
    </a-tab-pane>
  </a-tabs>
</template>
<script>
export default {
  name: 'r-product-info',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {};
  },
  created() {
  },
  computed: {},
  methods: {
    callback() {
    }
  },
};
</script>
