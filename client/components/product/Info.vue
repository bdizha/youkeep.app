<template>
  <a-row align="middle" class="r-tabs" justify="start" type="flex">
    <a-col :xs="{ span: 24 }" class="r-text-left">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(link, index) in links"
                          :key="index"
                          :header="link.label"
        >
          <div class="r-product-description">
            <r-product-description v-if="link.key == 'description'" :product="product"></r-product-description>
            <r-product-attributes v-if="link.key == 'attributes'" :product="product"></r-product-attributes>
            <r-store-about v-if="link.key == 'about'" :store="product.store"></r-store-about>
            <r-product-details v-if="link.key == 'details'" :product="product"></r-product-details>
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
    isShowing: { type: Boolean, required: false, default: false },
    product: { type: Object, required: false, default: null }
  },
  data () {
    return {
      currentLink: 'description',
      links: [
        { label: 'Asset Description', key: 'description' },
        { label: 'Attributes', key: 'attributes' },
        { label: 'About The ' + this.product.store.name, key: 'about' },
        { label: 'Details', key: 'details' }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {
    setTab (link) {
      this.currentLink = link.key
    }
  }
}
</script>
