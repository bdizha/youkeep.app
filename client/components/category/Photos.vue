<template>
  <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-category-photo v-if="category.photos !== undefined" :category="category" :start="0"></r-category-photo>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <h4 class="r-heading">
        {{ category.name }}
      </h4>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-category-photo v-if="category.photos !== undefined" :category="category" :start="3"></r-category-photo>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-category-photos',
  props: {
    category: { type: Object, required: true, default: {} },
    size: { type: Number, required: true, default: 90 }
  },
  data () {
    return {}
  },
  created () {
  },
  methods: {}
}
</script>
