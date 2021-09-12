<template>
  <a-card class="r-bg-white">
    <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <nuxt-link :to="'/blog/category/' + articleCategory.slug">
          <h4 class="r-heading">
            {{ articleCategory.name }}
          </h4>
        </nuxt-link>
      </a-col>
      <a-col v-for="(article, index) in articleCategory.articles"
             :key="index"
             v-if="index < 4"
             :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <r-blog-article :article="article"></r-blog-article>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-blog-category',
  props: {
    articleCategory: { type: Object, required: true }
  },
  data () {
    return {}
  },
  mounted () {
  },
  computed: mapGetters({
    blog: 'article/blog'
  }),
  methods: {}
}
</script>
