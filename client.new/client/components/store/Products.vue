<template>
  <a-row justify="center" type="flex">
    <a-col v-if="category" :span="24" class="r-p-24">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{span: 20}" :md="{span: 18}" :sm="{span: 16}" :xs="{span: 24}">
          <h3 class="r-heading-light">
            {{ category.name }}
          </h3>
        </a-col>
        <a-col :lg="{span: 4}" :md="{span: 6}"
               :sm="{span: 8}" :xs="{span: 24}" class="r-text-right"
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
      <a-row :gutter="[24,24]" class="r-product-cards">
        <a-col v-for="(product, index) in category.products" :key="index" :lg="{span: 4}"
               :md="{span: 6}" :sm="{span: 8}" :xs="{span: 24}"
        >
          <r-product-item :product="product"></r-product-item>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
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
  name: 'r-store-products',
  components: {},
  props: {
    category: { type: Object, required: false, default: {} },
  },
  data () {
    return {
      sort: 0,
      sortOptions: SORTS,
    }
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      console.log('r-store-products >>> ', this.category)
    },
    onSort (sort) {
      this.sort = sort
      this.$store.commit('onSort', sort)
    }
  }
}
</script>
