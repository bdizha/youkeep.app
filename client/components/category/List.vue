<template>
  <a-collapse class="r-pull-24"
              v-if="hasCategories"
              :defaultActiveKey="1"
              accordion
              expandIconPosition="right"
  >
    <a-collapse-panel v-for="(category, index) in categories"
                      v-if="index < limit"
                      :key="index.toString()"
                      :columns="columns"
                      :header="category.name"
                      class="r-collapse-panel"
    >
      <r-category-item :category="category"
                       :columns="columns"
                       :is-flush="isFlush"
                       :isVertical="isVertical"
      ></r-category-item>
    </a-collapse-panel>
  </a-collapse>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-list',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    isVertical: { type: Boolean, required: false, default: true },
    isFlush: { type: Boolean, required: false, default: false },
    limit: { type: Number, required: false, default: 12 }
  },
  data () {
    return {
      hasData: false
    }
  },
  computed: mapGetters({
    categories: 'base/categories',
    hasCategories: 'base/hasCategories',
    processes: 'base/processes'
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
