<template>
  <div class="r-article-photo-holder">
    <div slot="cover"
         :style="'background-image: url(/storage/blog/' + article.photo + ')'"
         class="r-article-photo"
    >
    </div>
  </div>
</template>
<script>
export default {
  name: 'r-article-photo',
  props: {
    article: { type: Object, required: true }
  },
  data () {
    return {}
  },
  mounted () {
  },
  methods: {}
}
</script>
