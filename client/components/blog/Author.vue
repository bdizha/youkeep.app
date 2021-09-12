<template>
  <a-row :gutter="[12,12]" align="middle" type="flex">
    <a-col flex="48px">
      <div class="r-bg-dark r-p-12 r-border-circle">
        <nuxt-img src="/images/icon_white.svg" width="24px"></nuxt-img>
      </div>
    </a-col>
    <a-col flex="auto">
      <h4 class="r-heading-light" :class="getTextClass()">
        <span>By</span>
        <span>{{ article.author }}</span>
        <span>·</span>
        <span>{{ article.age }}</span>
      </h4>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-blog-author',
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
    getTextClass () {
      return `r-text-${this.theme}`
    }
  }
}
</script>
