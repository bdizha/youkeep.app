<template>
  <a-select
    labelInValue
    :defaultValue="sortOptions[0]"
    size="default"
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
  name: 'r-store-sort',
  components: {},
  props: {},
  data () {
    return {
      hasData: false,
      sortOptions: SORTS
    }
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onSort (option) {
      this.params.sort = option.key
      // this.fetchStores();
    },
    async fetchStores () {
      this.params.category_id = this.category.id
      await this.$store.dispatch('shop/onStores', this.params)
    }
  }
}
</script>
