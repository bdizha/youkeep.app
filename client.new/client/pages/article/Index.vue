<template>
  <r-article-template :article="null">
    <a-row v-if="hasData" :gutter="[24,24]">
      <a-col v-for="(article, index) in articles"
             v-if="articles.length > 0"
             :key="index"
             :lg="{span:6}" :md="{span:8}" :sm="{span:12}" :xs="{span:24}"
             class="gutter-row"
      >
        <r-article-item :article="article" :size="24"></r-article-item>
      </a-col>
    </a-row>
  </r-article-template>
</template>
<script>
import axios from 'axios'

export default {
  layout: 'article',
  components: {},
  props: {},
  data () {
    return {
      articles: [],
      hasData: false,
      hasSpin: false
    }
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      this.hasSpin = true

      let params = {}
      let path = this.$route.path
      let $this = this

      axios.get(path, params)
        .then(response => {
          console.log('setting store data >> before')
          console.log(response.data)

          $this.articles = response.data.articles
          $this.hasData = true
          console.log('setting article data >> after')

          setTimeout(function () {
            $this.hasSpin = false
          }, 900)
        })
        .catch(e => {
          console.log(e)
        })
    }
  }
}
</script>
