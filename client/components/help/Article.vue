<template>
  <nuxt-link :to="'/help/article/' + article.slug">
    <a-card class="r-bg-white" hoverable>
      <a-row :gutter="[24,24]" align="bottom" justify="start" type="flex">
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <h3 class="r-heading-light">
            {{ article.title }}
          </h3>
        </a-col>
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <p class="r-text-normal">
            {{ article.blurb }}
          </p>
        </a-col>
      </a-row>
    </a-card>
  </nuxt-link>
</template>
<script>
export default {
  name: 'r-help-article',
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
