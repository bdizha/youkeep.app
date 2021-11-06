<template>
  <a-row :class="{'r-is-empty': false}" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-category-header v-if="false"
                         :category="category"
                         :columns="columns"
                         :has-product="hasProduct"
                         :is-showing="isShowing"
                         :store="store"
      ></r-category-header>
      <a-row align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-category-products
            :category="category"
            :columns="columns"
            :is-flush="isFlush"
            :isVertical="isVertical"
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
    hasProduct: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: 'base/processes'
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
