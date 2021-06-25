<template>
  <div class="r-article-photo-holder">
    <div slot="cover"
         class="r-article-photo"
         :style="'background-image: url(/storage/article/' + article.photo + ')'"
    >
    </div>
  </div>
</template>
<script>
export default {
  props: {
    article: { type: Object, required: true },
  },
  data () {
    return {}
  },
  mounted () {
    // console.log('Store photo', this.article);
  },
  methods: {},
}
</script>
