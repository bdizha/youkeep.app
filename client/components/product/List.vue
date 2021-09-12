<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col v-if="hasProducts" :span="24">
      <div class="r-ph-24">
        <r-product-paginate :filters="filters" :span="columns > 1 ? 16 : 24"></r-product-paginate>
        <div class="r-mv-24">
          <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex">
            <a-col v-for="(product, index) in products.data"
                   :key="index"
                   :class="{'r-spin__active' :processes.isProduct}"
                   :lg="{span: 24 / columns}"
                   :md="{span: 24 / columns}" :sm="{span: columns > 1 ? 12 : 24}" :xs="{span: columns > 1 ? 12 : 24}"
            >
              <r-product-item :isVertical="isVertical" :product="product"></r-product-item>
            </a-col>
          </a-row>
        </div>
        <r-product-paginate :columns="columns > 1 ? 16 : 24" :filters="filters" :span="columns > 1 ? 16 : 24"
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
    processes: 'base/processes'
  }),
  created () {
  },
  methods: {}
}
</script>
