<template>
  <r-avatar v-on:click="onProduct"
            shape="square"
            :src="product.thumbnail_url"/>
</template>
<script>
export default {
  name: 'r-product-photo',
  props: {
    product: {type: Object, required: false, default: null},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      quantity: 1,
      styles: null,
      size: 180,
    };
  },
  created() {


  },
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
