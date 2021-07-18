<template>
  <a-row justify="center" type="flex">
    <a-col :span="24">
      <a-row v-if="hasProducts" :gutter="[24,24]" class="r-mb-24" justify="center" type="flex">
        <a-col :lg="{span: span}" :md="{span: span}" :sm="{span: 24}" :xs="{span: 24}">
          <a-pagination v-model="products.current_page"
                        :page-size="parseInt(products.per_page)"
                        :total="products.total"
                        show-less-items
                        @change="onChange"
          >
            <template slot="buildOptionText" slot-scope="props">
              <a-button class="r-btn-bordered-grey"
                        size="large" type="secondary"
              >
                {{ props.value }}
              </a-button>
            </template>
          </a-pagination>
        </a-col>
        <a-col :lg="{span: span === 24 ? span : (24-span) / 2}" :md="{span: span === 24 ? span : (24-span) / 2}"
               :sm="{span: 24}" :xs="{span: 24}"
               class="r-text-center"
        >
          <r-category-filters></r-category-filters>
        </a-col>
        <a-col :lg="{span: span === 24 ? span : (24-span) / 2}" :md="{span: span === 24 ? span : (24-span) / 2}"
               :sm="{span: 24}" :xs="{span: 24}"
               class="r-text-right"
        >
          <div class="r-same-height">
            <a-select
              :defaultValue="sortOptions[0]"
              labelInValue
              size="large"
              style="min-width: 100%;"
              @change="onSort"
            >
              <a-select-option v-for="(s, index) in sortOptions"
                               :key="index"
                               :value="s.key"
              >
                <span class="r-sort-value">{{ s.label }}</span>
              </a-select-option>
            </a-select>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

const SORTS = [
  {
    label: 'Name: A to Z',
    key: 0
  },
  {
    label: 'Name: Z to A',
    key: 1
  },
  {
    label: 'Price: Low to High',
    key: 2
  },
  {
    label: 'Price: High to Low',
    key: 3
  },
  {
    label: 'Most Recent',
    key: 4
  }
]
export default {
  name: 'r-product-paginate',
  components: {},
  props: {
    span: { type: Number, required: true, default: 16 },
    filters: { type: Object, required: true, default: null },
    isVertical: { type: Boolean, required: false, default: true },
  },
  data () {
    return {
      sortOptions: SORTS
    }
  },
  computed: mapGetters({
    store: 'base/store',
    payload: 'product/payload',
    hasProducts: 'base/hasProducts',
    products: 'base/products',
    processes: 'base/processes'
  }),
  created () {
  },
  methods: {
    async onChange (page, limit) {
      const payload = this.payload
      payload.page = page
      payload.limit = limit
      await this.onProducts(payload)
    },
    async onSort (option) {
      const payload = this.payload
      payload.sort = option.key

      await this.onProducts(payload)
    },
    async onProducts (payload) {
      await this.$store.dispatch('base/onProducts', payload)
    }
  }
}
</script>
