<template>
  <a-row :gutter="[24,24]" justify="start" type="flex">
    <a-col v-for="(article, index) in articles"
           :key="index"
           :lg="{ span:8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <r-article-item :article="article"></r-article-item>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-articles',
  components: {},
  data () {
    return {}
  },
  computed: mapGetters({
    articles: 'content/articles'
  }),
  mounted () {
  },
  methods: {}
}
</script>
