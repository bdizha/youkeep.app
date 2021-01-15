<template>
  <a-row class="r-tabs" type="flex" justify="start">
    <a-col class="r-text-left" :xs="{ span: 24 }">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(link, index) in links"
                          :key="index"
                          class="r-category-menu-panel" :header="link.label">
          <div class="r-product-description">
            <r-product-description v-if="link.key == 'description'" :product="product"></r-product-description>
            <r-product-reviews v-if="link.key == 'reviews'" :product="product"></r-product-reviews>
            <r-product-returns v-if="link.key == 'returns'" :product="product"></r-product-returns>
          </div>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-info',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
      currentLink: 'description',
      links: [
        {label: 'Product Description', key: 'description'},
        {label: 'Reviews', key: 'reviews'},
        {label: 'Delivery & Returns', key: 'returns'}
      ]
    };
  },
  created() {
  },
  computed: {},
  methods: {
    setTab(link) {
      this.currentLink = link.key;
    }
  },
};
</script>
