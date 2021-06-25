<template>
  <a-card :style="'background-image: url(/storage/article/' + article.photo + ');'"
          v-if="article" class="r-article r-article-cover"
  >
    <r-article-photo :article="article"></r-article-photo>
    <a-card-meta>
      <template slot="description">
        <div class="r-article-info">
          <div class="r-article-info-title">{{ article.title }}</div>
          <div v-if="false" class="r-article-slogan">{{ article.blurb }}</div>
        </div>
        <div class="r-article-slogan">
          <a-icon slot="prefix" type="star"/>
        </div>
      </template>
    </a-card-meta>
    <r-spinner v-if="hasSpin" :is-absolute="true"></r-spinner>
  </a-card>
</template>
<script>
export default {
  components: {},
  props: {
    article: { type: Object, required: false },
    isShow: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      hasSpin: true,
    }
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      let $this = this
      $this.hasSpin = false
    },
    onSearch () {
      this.isSearching = true
    },
  }
}
</script>
