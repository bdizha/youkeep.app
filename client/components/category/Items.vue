<template>
  <a-row type="flex" justify="center" class="r-p-24 r-product-categories">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: span }">
      <r-category v-for="(category, index) in categories"
                  :columns="columns"
                  :key="index + 1"
                  :category="category"
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
