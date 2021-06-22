<template>
  <a-row :class="{'r-is-empty': false}" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-header :category="category"
                         :columns="columns"
                         :is-showing="isShowing"
                         :has-product="hasProduct"
                         :store="store"
      ></r-category-header>
      <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-category-products
            :isVertical="isVertical"
            :is-flush="isFlush"
            :columns="columns"
            :category="category"
          ></r-category-products>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-item',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 3 },
    isVertical: { type: Boolean, required: false, default: true },
    isFlush: { type: Boolean, required: false, default: false },
    isShowing: { type: Boolean, required: false, default: false },
    category: { type: Object, required: false, default: {} },
    hasProduct: { type: Boolean, required: false, default: false },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    processes: 'base/processes',
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
