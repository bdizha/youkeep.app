<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse :activeKey="'0'" expandIconPosition="right">
        <a-collapse-panel class="r-collapse-panel"
                          v-for="(category, index) in product.categories"
                          v-if="category.has_products"
                          :key="index"
                          :header="category.name"
        >
          <r-product-products :columns="columns"
                              :is-vertical="isVertical"
                              :type="category.type"
                              :product="product"
          >
          </r-product-products>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel"
                          key="stores"
                          header="Explore similar stores"
        >
          <r-store-list></r-store-list>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-categories',
  components: {},
  props: {
    product: { type: Object, required: false, default: null },
    columns: { type: Number, required: false, default: 1 },
    isVertical: { type: Boolean, required: false, default: true },
    types: { type: Array, required: false, default: () => [1] },
    limit: { type: Number, required: false, default: 12 }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    processes: 'base/processes',
    hasProduct: 'base/hasProduct',
  }),
  created () {
  },
  mounted () {
  },
  methods: {
    async payload () {
    }
  }
}
</script>
