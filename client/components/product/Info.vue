<template>
  <a-tabs class="r-mv-48 r-p-24" type="card" @change="callback">
    <a-tab-pane key="1" tab="Product information & reviews">
      <div :data-descrption="product.description">Not set</div>
    </a-tab-pane>
    <a-tab-pane key="2" tab="Seller information">
      Not set
    </a-tab-pane>
    <a-tab-pane key="3" tab="Delivery & returns">
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
