<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <nuxt-link v-for="(category, index) in article.categories"
                 :key="index"
                 :to="'/blog/category/' + category.slug"
                 class="r-blog-tag" :class="getBgClass()"
      >
        {{ '#' + category.name }}
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-blog-categories',
  props: {
    article: { type: Object, required: true },
    theme: { type: String, required: false, default: 'dark' }
  },
  data () {
    return {}
  },
  mounted () {
  },
  methods: {
    getBgClass () {
      return `r-blog-${this.theme}`
    }
  }
}
</script>
