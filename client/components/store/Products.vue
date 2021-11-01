<template>
  <a-card class="r-bg-dark">
    <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-collapse default-active-key="0" expandIconPosition="right">
          <a-collapse-panel header="More from this collection">
            <r-product-list :columns="4"></r-product-list>
          </a-collapse-panel>
        </a-collapse>
      </a-col>
    </a-row>
  </a-card>
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
  data () {
    return {
      sort: 0,
      sortOptions: SORTS
    }
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onSort (sort) {
      this.sort = sort
      this.$store.commit('onSort', sort)
    }
  }
}
</script>
