<template>
  <a-row class="r-p-24 r-product-categories" justify="center" type="flex">
    <a-col :lg="{ span: span }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-category v-for="(category, index) in categories"
                  :key="index + 1"
                  :category="category"
                  :columns="columns"
      >
      </r-category>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-category-items',
  props: {
    columns: { type: Number, required: false, default: 6 },
    span: { type: Number, required: false, default: 18 },
    categories: { type: Array, required: true, default: [] }
  },
  data () {
    return {
      products: [],
      size: 24,
      isProcessing: true
    }
  },
  computed: {},
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      let $this = this
      setTimeout(function () {
        $this.isProcessing = false
      }, 900)

      if (this.columns <= 4) {
        this.size = 24
      }
    }
  }
}
</script>
