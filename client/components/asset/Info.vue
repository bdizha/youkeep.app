<template>
  <a-row align="middle" class="r-tabs" justify="start" type="flex">
    <a-col :xs="{ span: 24 }" class="r-text-left">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(tab) in tabs"
                          :key="tab.key"
                          :header="tab.title"
        >
          <div class="r-product-description">
            <r-asset-description v-if="tab.key == 'description'" :product="product"></r-asset-description>
            <r-asset-attributes v-if="tab.key == 'attributes'" :product="product"></r-asset-attributes>
            <r-store-about v-if="tab.key == 'about'" :store="product.store"></r-store-about>
            <r-asset-details v-if="tab.key == 'details'" :product="product"></r-asset-details>
            <r-asset-slider v-if="tab.key == 'assets'" :columns="3" :filters="{event_type: eventType}"></r-asset-slider>
          </div>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>

const EVENT_TYPE_SUGGESTED = 5
export default {
  name: 'r-asset-info',
  props: {
    isShowing: { type: Boolean, required: false, default: false },
    product: { type: Object, required: false, default: null }
  },
  data () {
    return {
      eventType: EVENT_TYPE_SUGGESTED,
      currentLink: 'description',
      tabs: [
        { title: 'Asset Description', key: 'description' },
        { title: 'Attributes', key: 'attributes' },
        { title: 'About The ' + this.product.store.name, key: 'about' },
        { title: 'Details', key: 'details' },
        { title: 'You may also like', key: 'assets' }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {
    setTab (tab) {
      this.currentLink = tab.key
    }
  }
}
</script>
