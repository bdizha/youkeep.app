<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col v-if="hasProducts" :span="24">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-asset-paginate :filters="filters" :span="columns > 1 ? 16 : 24"></r-asset-paginate>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex">
            <a-col v-for="(product, index) in products.data"
                   :key="index"
                   :class="{'r-spin__active' :processes.isProduct}"
                   :lg="{span: columns}"
                   :md="{span: columns}" :sm="{span: columns > 1 ? 12 : 24}" :xs="{span: columns > 1 ? 12 : 24}"
            >
              <r-asset-item :isVertical="isVertical" :product="product"></r-asset-item>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-asset-paginate :filters="filters" :span="columns > 1 ? 16 : 24"></r-asset-paginate>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-asset-list',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 8 },
    filters: { type: Object, required: true, default: null },
    isVertical: { type: Boolean, required: false, default: false }
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
