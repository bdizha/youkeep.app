<template>
  <a-row :gutter="[12,12]" align="bottom" justify="start" type="flex">
    <a-col v-if="hasCategory" :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <nuxt-link :to="'/help/category/' + article.category.slug">
        <h4 class="r-heading">
          {{ article.category.name }}
        </h4>
      </nuxt-link>
    </a-col>
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <nuxt-link :to="'/help/article/' + article.slug">
        <p class="r-text-normal">
          {{ article.title }}
        </p>
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-help-article',
  props: {
    article: { type: Object, required: true },
    hasCategory: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  mounted () {
  },
  methods: {}
}
</script>
