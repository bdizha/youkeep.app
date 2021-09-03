<template>
  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-category-photo v-if="category.photos !== undefined" :category="category" :start="0"></r-category-photo>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <h4 class="r-heading">
        {{ category.name }}
      </h4>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
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
