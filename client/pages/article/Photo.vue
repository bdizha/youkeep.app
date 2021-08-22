<template>
  <div class="r-article-photo-holder">
    <div slot="cover"
         :style="'background-image: url(/storage/article/' + article.photo + ')'"
         class="r-article-photo"
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
