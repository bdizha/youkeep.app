<template>
  <a-row class="r-category-items">
    <a-col :span="24">
      <r-category-header :category="category" :store="store"></r-category-header>
      <a-row :gutter="0" class="r-product-cards">
        <a-col :span="24" class="r-spin-holder">
          <r-product-items v-if="hasData" :category="category" :columns="columns"></r-product-items>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 },
    isStore: { type: Boolean, required: false, default: false },
    category: { type: Object, required: false }
  },
  data () {
    return {
      products: [],
      hasData: true,
      filters: {}
    }
  },
  computed: mapGetters({
    store: 'shop/store',
  }),
  mounted () {
    this.payload()
  },
  methods: {
    async payload () {
      let params = {
        category_id: this.category.id
      }

      console.log('this category', this.category)

      const { data } = await this.$store.dispatch('store/fetchProducts', params)
    }
  }
}
</script>
