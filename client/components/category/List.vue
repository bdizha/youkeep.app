<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-spin-holder r-categories" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-collapse v-if="hasCategories" default-active-key="0" expandIconPosition="right">
        <a-collapse-panel class="r-collapse-panel"
                          v-if="index < limit"
                          v-for="(category, index) in categories"
                          :key="category.id + '-category'"
                          :columns="columns"
                          :header="category.name"
        >
          <r-category-item :isVertical="isVertical"
                           :columns="columns"
                           :is-flush="isFlush"
                           :category="category"
          ></r-category-item>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
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
    processes: 'base/processes',
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
