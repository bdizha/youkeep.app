<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-spin-holder">
      <a-collapse default-active-key="sellers" expandIconPosition="right">
        <a-collapse-panel v-for="(category, index) in product.categories"
                          v-if="category.has_products"
                          :key="category.name"
                          :header="category.name"
                          class="r-collapse-panel"
        >
          <r-product-products :columns="columns"
                              :is-vertical="isVertical"
                              :product="product"
                              :type="category.type"
          >
          </r-product-products>
        </a-collapse-panel>
        <a-collapse-panel key="sellers"
                          class="r-collapse-panel"
                          header="Explore similar sellers"
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
