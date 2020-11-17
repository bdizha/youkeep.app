<template>
  <a-row>
    <a-col class="r-pt-12" :span="24">
      <a-row type="flex" justify="start">
        <a-col :style="'min-height: ' + isShowing ? '36px;': '72px;'" :span="24">
          <div class="r-text-normal r-product-text">
            {{ product.name }}
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-header',
  props: {
    product: {type: Object, required: false, default: null},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      quantity: 1
    };
  },
  created() {
  },
  computed: {},
  methods: {
    onProduct() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'product';
      this.$store.dispatch('base/onModal', modal);

      this.$store.dispatch('shop/onProduct', this.product);
    }
  },
};
</script>
