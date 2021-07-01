<template>
  <a-row type="flex" justify="center">
    <a-col :span="24">
      <a-row v-if="hasProducts" :gutter="[24,24]" class="r-mb-24" type="flex" justify="center">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: span}" :lg="{span: span}">
          <a-pagination v-model="products.current_page"
                        :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                        :page-size="parseInt(products.per_page)"
                        @change="onChange"
                        :total="products.total"
                        :simple="span === 24"
                        show-less-items
          >
            <template slot="buildOptionText" slot-scope="props">
              <a-button class="r-btn-bordered-grey"
                        type="secondary" size="large"
              >
                {{ props.value }}
              </a-button>
            </template>
          </a-pagination>
        </a-col>
        <a-col class="r-text-center" :xs="{span: 24}"
               :sm="{span: 24}" :md="{span: span === 24 ? span : (24-span) / 2}"
               :lg="{span: span === 24 ? span : (24-span) / 2}"
        >
          <r-category-filters></r-category-filters>
        </a-col>
        <a-col class="r-text-right" :xs="{span: 24}"
               :sm="{span: 24}" :md="{span: span === 24 ? span : (24-span) / 2}"
               :lg="{span: span === 24 ? span : (24-span) / 2}"
        >
          <div class="r-same-height">
            <a-select
              labelInValue
              :defaultValue="sortOptions[0]"
              size="large"
              @change="onSort"
              style="min-width: 100%;"
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
      sortOptions: SORTS,
      payload: this.filters
    }
  },
  computed: mapGetters({
    store: 'base/store',
    hasProducts: 'base/hasProducts',
    products: 'base/products',
    processes: 'base/processes',
  }),
  created () {
  },
  methods: {
    async onChange (page, limit) {
      this.payload.page = page
      this.payload.limit = limit
      await this.onProducts()
    },
    async onSort (option) {
      this.payload.sort = option.key
      await this.onProducts()
    },
    async onProducts () {

      console.log('>>> 111')
      await this.$store.dispatch('base/onProducts', this.payload)
    }
  }
}
</script>
