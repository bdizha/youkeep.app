<template>
  <a-row :gutter="[24,24]" justify="start" type="flex">
    <a-col v-for="(article, index) in blog.articles"
           :key="index"
           :lg="{ span:8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <r-blog-article :article="article"></r-blog-article>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-blog-articles',
  components: {},
  data () {
    return {}
  },
  computed: mapGetters({
    blog: 'article/blog'
  }),
  mounted () {
  },
  methods: {}
}
</script>
