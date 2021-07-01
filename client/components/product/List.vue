<template>
  <a-row type="flex" justify="center">
    <a-col v-if="hasProducts" :span="24">
      <div class="r-ph-24">
        <r-product-paginate :span="columns > 1 ? 16 : 24" :filters="filters"></r-product-paginate>
        <div class="r-mv-24">
          <a-row type="flex" :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]">
            <a-col :class="{'r-spin__active' :processes.isProduct}"
                   v-for="(product, index) in products.data"
                   :key="index"
                   :xs="{span: columns > 1 ? 12 : 24}"
                   :sm="{span: columns > 1 ? 12 : 24}" :md="{span: 24 / columns}" :lg="{span: 24 / columns}"
            >
              <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
            </a-col>
          </a-row>
        </div>
        <r-product-paginate :span="columns > 1 ? 16 : 24" :columns="columns > 1 ? 16 : 24" :filters="filters"
        ></r-product-paginate>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-list',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 },
    filters: { type: Object, required: true, default: null },
    isVertical: { type: Boolean, required: false, default: true },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    hasProducts: 'base/hasProducts',
    products: 'base/products',
    processes: 'base/processes',
  }),
  created () {
  },
  methods: {}
}
</script>
