<template>
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
      <span class="r-text-normal">{{ s.label }}</span>
    </a-select-option>
  </a-select>
</template>
<script>
import { mapGetters } from 'vuex'

const SORTS = [
  {
    label: 'Last 24 hours',
    key: 0
  },
  {
    label: 'Last 7 days',
    key: 1
  },
  {
    label: 'Last 30 days',
    key: 2
  },
  {
    label: 'All time',
    key: 3
  }
]
export default {
  name: 'r-ranking-sort',
  components: {},
  props: {},
  data () {
    return {
      params: {
        sort: null
      },
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
    },
    async onRankings () {
      this.params.category_id = this.category.id
      await this.$store.dispatch('shop/onSellers', this.params)
    }
  }
}
</script>
